<div class="menu">
    <div class="main-menu">
        <a href="{{ url('boats') }}">Boat</a>
        <a href="{{ url('cars') }}">Car</a>
        <a href="{{ url('tablets') }}">Tablet</a>
        <a href="{{ url('toys') }}">Toy</a>
        <a href="{{ url('vehicles') }}">Vehicle</a>
    </div>
</div>
<style>
    
    body {
        background: linear-gradient(40deg, #53b5b2, #d96ad7);
        color: white;
    }
    a {
        cursor: pointer !important;
    }
    .submit {
        width: 40% !important;
        position: relative;
        left: 90px;
        height: 5vh !important;
        cursor: pointer !important;
        background: transparent;
    }
    .main-menu a {
        padding-right: 20px;
        font-size: 1.5em;
        text-decoration: none;
        color: white;
    }
    .main-menu {
        text-align: center;
    }
    .menu {
        padding: 2em 2em;
    }
    table, th, td {
        border: 1px solid white;
        border-collapse: collapse;
        margin-top: 50px;
    }
    th, td {
        padding: 15px;
        text-align: left;
    }
    a.create-button {
        text-decoration: none;
        color: white;
        border: 2px solid white;
        padding: 5px 30px;
        font-weight: bold;
        font-size: 1.3em;
        transition: 0.7s;
    }
    a.create-button:hover {
        border: 4px double black;
        background: white;
        color: black;
    }
    a.edit {
        text-transform: capitalize;
        color: orange;
        text-decoration: none;
        font-weight: bold;
    }
    a.delete {
        color: red;
        text-decoration: none;
        text-transform: capitalize;
        font-weight: bold;
    }
    .create-form form input {
        width: 23vw;
        height: 4vh;
        margin: 10px;
        border: 1px solid black;
    }
    .create-txt {
        text-align: center;
        color: black;
    }
    .create-form {
        width: 25%;
        height: 46vh;
        border-radius: 15px;
        margin: auto;
        background: white;
        opacity: 0.7;
        margin-top: 50px;
    }
    .menu a {
        color: white;
        padding: 5px 15px;
        margin-right: 15px;
        border: 2px solid white;
        border-radius: 5px;
        transition: 0.5s;
    }
    .menu a:hover {
        box-shadow: 0px 10px 0px 0px;
    }
</style>