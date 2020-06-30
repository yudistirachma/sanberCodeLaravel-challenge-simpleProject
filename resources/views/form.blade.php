@extends('layout.app')
@section('title','Form')
@section('content')
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <form action="/register" method="Post">
        @csrf
        <p>
            <label for="FirstName">First name :</label><br><br>
            <input id="FirstName" name="firstname" type="text">
        </p>
        <p>
            <label for="LastName">Last name :</label><br><br>
            <input id="LastName" name="lastname" type="text">
        </p>
        <p>Gender :</p>
        <input type="radio" name="Gender" id="male" value="male"><label for="male">male</label><br>
        <input type="radio" name="Gender" id="Female" value="Female"><label for="Female">Female</label><br>
        <input type="radio" name="Gender" id="Other" value="Other"><label for="Other">Other</label>
        <p>Natiolity :</p>
        <select name="Natiolity" id="Natiolity">
            <option value="indonesia">indonesia</option>
            <option value="malaysia">malaysia</option>
            <option value="sigapura">singapura</option>
            <option value="thailand">thailand</option>
        </select><br>
        <p>Language Spoken :</p>
        <input type="checkbox" name="indonesia" value="bahasa indonesia" id="bahasa1"><label for="bahasa1">Bahasa
            Indonesia</label><br>
        <input type="checkbox" name="english" value="english id=" bahasa2"><label for="bahasa2">English</label><br>
        <input type="checkbox" name="other" value="other id=" bahasa3"><label for="bahasa3">Other</label><br><br>
        <label for="textArea">Bio :</label><br>
        <textarea name="bio" id="textArea" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
@endsection