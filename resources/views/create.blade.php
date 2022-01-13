@extends('layouts.app')
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(4) td{
      padding: 10px;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
    input {
      padding: 5px;
    }
    button {
      padding: 10px 20px;
      background-color: #289ADC;
      border: none;
      color: white;
    }
</style>
@section('title', 'create.blade.php')

@section('content')
<form action="/register" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        名前
      </th>
      <td>
        <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <th>
        メールアドレス
      </th>
      <td>
        <input type="email" name="email">
      </td>
    </tr>
    <tr>
      <th>
        パスワード
      </th>
      <td>
        <input type="password" name="pass">
      </td>
    </tr>
    <tr>
      <th>
        確認用パスワード
      </th>
      <td>
        <input type="password" name="pass_confirm">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>会員登録</button>
      </td>
    </tr>
  </table>
</form>
@endsection