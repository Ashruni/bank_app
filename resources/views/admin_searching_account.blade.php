<!DOCTYPE html>
<html>
<body>

<h2>Search Transaction History </h2>

<search>
  <form action="{{route('admin_posting_search_data')}}" method="post">
    @csrf
    <input name="accountNumber"  placeholder="Search Account Number" required>
    <input type="submit">
  </form>
</search>

</body>
</html>
