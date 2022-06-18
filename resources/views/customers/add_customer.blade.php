@extends('layouts.app')
@section('page_title')
    <span>Add Customer</span>
@endsection
@section('content')
<form action="{{route('customers.create')}}" method="POST">
@csrf
<div class="form-group">
    <label for="name">name</label>
    <input id="name" type="text" name="name" class="form-control" placeholder="Enter Name">
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input id="email" type="text" name="email" class="form-control" placeholder="Enter E-mail" value="">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input id="password" type="text" name="password" class="form-control" placeholder="Enter Password" value="">
</div>
<div class="form-group">
    <label for="role">Role</label><br>
    <select id="role" name="role" class="custom-select" style="width: auto;">
    <option value="">Select Role</option>
    <option value="admin">Admin</option>
    <option value="customer">Customer</option>
</select>
</div>
<div class="form-group">
    <label for="status">Status</label><br>
    <select id="status" name="status" class="custom-select" style="width: auto;">
    <option value="" selected>Select Status</option>
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
</select>
</div>
<div class="form-group">
    <label for="company_name">Company Name</label>
    <input id="company_name" type="text" name="company_name" class="form-control" placeholder="Enter Company Name">
</div>
<div class="input-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="photo">
        <label class="custom-file-label" name="photo" for="photo" placeholder="Enter Photo">Choose file</label>
    </div>
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input id="phone" type="text" name="phone" class="form-control" placeholder="Enter Phone">
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input id="address" type="text" name="address" class="form-control" placeholder="Enter Address">
</div>
<div class="form-group">
    <label for="vat_number">Vat Number</label>
    <input id="vat_number" type="text" name="vat_number" class="form-control" placeholder="Enter Vat Number">
</div>
<input type="submit" class="btn btn-primary" value="Add Customer">
</form>
@endsection