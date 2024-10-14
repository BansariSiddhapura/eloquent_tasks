Here's a table with the most commonly used Eloquent methods, including their usage and examples:

| **Method Name**       | **Usage**                                          | **Example**                                                  |
| --------------------- | -------------------------------------------------- | ------------------------------------------------------------ |
| **`all()`**           | Retrieves all records from the table.              | `$customers = Customer::all();`                              |
| **`find($id)`**       | Retrieves a record by its primary key.             | `$customer = Customer::find(1);`                             |
| **`first()`**         | Retrieves the first record that matches the query. | `$customer = Customer::where('status', 'active')->first();`  |
| **`get()`**           | Retrieves all records that match the query.        | `$customers = Customer::where('status', 'active')->get();`   |
| **`pluck('column')`** | Retrieves a single column's values as an array.    | `$names = Customer::pluck('name');`                          |
| **`where()`**         | Adds conditions to the query.                      | `$customers = Customer::where('status', 'active')->get();`   |
| **`orWhere()`**       | Adds an alternative condition to the query.        | `$customers = Customer::where('status', 'active')->orWhere('age', '>', 25)->get();` |
| **`orderBy()`**       | Sorts the results by a specific column.            | `$customers = Customer::orderBy('created_at', 'desc')->get();` |
| **`limit()`**         | Limits the number of records returned.             | `$customers = Customer::limit(10)->get();`                   |
| **`with()`**          | Eager loads related models.                        | `$orders = Order::with('customer')->get();`                  |
| **`count()`**         | Counts the number of records.                      | `$count = Customer::where('status', 'active')->count();`     |
| **`sum('column')`**   | Returns the sum of a column's values.              | `$totalAmount = Order::sum('amount');`                       |
| **`avg('column')`**   | Returns the average of a column's values.          | `$averageAge = Customer::avg('age');`                        |
| **`create()`**        | Creates a new record in the database.              | `$customer = Customer::create(['name' => 'John Doe', 'email' => 'john@example.com']);` |
| **`insert()`**        | Inserts multiple records at once.                  | `Customer::insert([['name' => 'Jane Doe', 'email' => 'jane@example.com'], ['name' => 'Mark Smith', 'email' => 'mark@example.com']]);` |
| **`update()`**        | Updates existing records.                          | `Customer::where('id', 1)->update(['name' => 'Updated Name']);` |
| **`save()`**          | Saves changes to a model instance.                 | `$customer = Customer::find(1); $customer->name = 'Updated Name'; $customer->save();` |
| **`delete()`**        | Deletes records.                                   | `Customer::where('id', 1)->delete();`                        |
| **`destroy()`**       | Deletes records by their primary key.              | `Customer::destroy([1, 2, 3]);`                              |
| **`hasMany()`**       | Defines a one-to-many relationship.                | `public function orders() { return $this->hasMany(Order::class); }` |
| **`belongsTo()`**     | Defines the inverse of a one-to-many relationship. | `public function customer() { return $this->belongsTo(Customer::class); }` |
| **`hasOne()`**        | Defines a one-to-one relationship.                 | `public function profile() { return $this->hasOne(Profile::class); }` |
| **`belongsToMany()`** | Defines a many-to-many relationship.               | `public function roles() { return $this->belongsToMany(Role::class); }` |
| **`when()`**          | Conditionally adds clauses to the query.           | `$customers = Customer::when($status, function ($query) use ($status) { return $query->where('status', $status); })->get();` |
| **`chunk()`**         | Processes large datasets in chunks.                | `Customer::chunk(100, function ($customers) { foreach ($customers as $customer) { // Process each customer } });` |
| **`withTrashed()`**   | Retrieves records that are soft-deleted.           | `$customers = Customer::withTrashed()->get();`               |
| **`onlyTrashed()`**   | Retrieves only soft-deleted records.               | `$customers = Customer::onlyTrashed()->get();`               |
| **`restore()`**       | Restores soft-deleted records.                     | `Customer::withTrashed()->where('id', 1)->restore();`        |
| **`scope`**           | Uses local scopes for reusable query logic.        | `public function scopeActive($query) { return $query->where('status', 'active'); }`   `$activeCustomers = Customer::active()->get();` |
| **Mutators**          | Modifies data before saving to the database.       | `public function setNameAttribute($value) { $this->attributes['name'] = strtoupper($value); }` |
| **Accessors**         | Modifies data when it is retrieved.                | `public function getNameAttribute($value) { return ucfirst($value); }` |

This table provides a concise overview of essential Eloquent methods that you should learn to effectively work with Laravel's Eloquent ORM.

For performance optimization in Laravel's Eloquent ORM, several methods and techniques can be used to reduce database load, speed up queries, and improve the efficiency of your application. Here are some methods and strategies that you should be aware of:

| **Method/Technique**               | **Usage**                                                    | **Example**                                                  |
| ---------------------------------- | ------------------------------------------------------------ | ------------------------------------------------------------ |
| **`select()`**                     | Only fetch specific columns instead of all columns (`*`).    | `Customer::select('id', 'name')->get();`                     |
| **`chunk()`**                      | Processes large datasets in smaller chunks to save memory.   | `Customer::chunk(100, function ($customers) { /* Process each customer */ });` |
| **`lazy()`**                       | Similar to `chunk()`, but uses a generator to process data efficiently. | `Customer::lazy()->each(function ($customer) { /* Process each customer */ });` |
| **`with()`**                       | Eager loads related models to avoid the N+1 query problem.   | `Order::with('customer')->get();`                            |
| **`load()`**                       | Eager loads relationships on already retrieved models.       | `$orders->load('customer');`                                 |
| **`withCount()`**                  | Adds a relationship count to the query without loading the relation. | `User::withCount('posts')->get();`                           |
| **`exists()`**                     | Checks if records exist without fetching all the data.       | `Customer::where('email', 'john@example.com')->exists();`    |
| **`doesntExist()`**                | Checks if records do not exist.                              | `Customer::where('email', 'missing@example.com')->doesntExist();` |
| **`inRandomOrder()`**              | Retrieves records in random order but is more performant on indexed columns. | `Customer::inRandomOrder()->first();`                        |
| **`distinct()`**                   | Retrieves distinct values to avoid duplicates.               | `Customer::distinct()->get(['city']);`                       |
| **Database Indexing**              | Index columns that are frequently searched or used in conditions. | `Schema::table('users', function (Blueprint $table) { $table->index('email'); });` |
| **Caching (e.g., `cache()`)**      | Caches queries to reduce database load.                      | `Cache::remember('customers', 60, function () { return Customer::all(); });` |
| **`remember()` (Query Builder)**   | Caches query results when using the query builder.           | `DB::table('customers')->remember(10)->get();`               |
| **`deferLoading()`**               | Defers the loading of large or unnecessary relationships.    | `$users = User::with(['posts' => function ($query) { $query->deferLoading(); }])->get();` |
| **Pagination**                     | Uses pagination to limit the number of results per request.  | `Customer::paginate(10);`                                    |
| **Batch Updates/Inserts**          | Updates or inserts multiple records at once to reduce queries. | `Customer::insert([...]);` or `Customer::where('status', 'active')->update([...]);` |
| **`whereIn()` and `whereNotIn()`** | Use for filtering with large data sets instead of individual conditions. | `Customer::whereIn('id', [1, 2, 3])->get();`                 |
| **Database Query Logging**         | Disable query logging when running heavy queries to reduce memory usage. | `DB::disableQueryLog();`                                     |

### Additional Tips for Performance Optimization

1. **Eager Loading with Constraints**: Use eager loading with constraints to load only necessary data.

   ```
   $orders = Order::with(['customer' => function ($query) {
       $query->where('status', 'active');
   }])->get();
   ```

2. **Avoid Using `\*` in Select Statements**: Only fetch the columns you need to reduce data transfer.

   ```
   $customers = Customer::select('id', 'name', 'email')->get();
   ```

3. **Use Database Indexes**: Indexing frequently used columns (like `foreign keys`, `where` conditions) will speed up query performance significantly.

4. **Bulk Inserts/Updates**: Use bulk operations to perform multiple updates or inserts in a single query instead of looping.

   ```
   Customer::upsert([...], ['email'], ['name', 'status']);
   ```

5. **Use Query Builder for Raw Queries**: For very complex queries, sometimes using raw SQL with the Query Builder can be faster.

   ```
   DB::table('orders')->select(DB::raw('COUNT(*) as order_count'))->where('status', 'completed')->get();
   ```

6. **Avoid N+1 Query Problem**: Make sure you load relationships eagerly (`with()`) to prevent N+1 problems where multiple queries are executed in a loop.

These methods and techniques will help you optimize Eloquent queries, making them faster and more efficient. They are crucial when dealing with large datasets or building applications that need high performance.