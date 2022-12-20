<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add new</title>
</head>

<style>
    label {
        color: #FFF;
    }
</style>
<body style="background-color: #2e2e2e;">
    
<div class="container mt-5">
    <form class="col-sm-6" method="POST" action="add-new-item.php">
        <div class="ms-5 mb-2">
            <label class="form-label">Názov produktu</label>
            <input type="text" class="form-control" name="product_name">
        </div>

        <div class="ms-5 mb-2">
            <label class="form-label">Výrobca</label>
            <select class="form-select" name="product_made">
                <option selected>Open this select menu</option>
                <option value="1">Gymbeam</option>
                <option value="2">Nutrend</option>
                <option value="3">Optimum N.</option>
                <option value="4">Applied N.</option>
                <option value="5">Pro Supps</option>
                <option value="6">BeastPink</option>
            </select>
        </div>

        <div class="ms-5 mb-2">
            <label>Hlavná kategória</label>
            <select class="form-select" name="category1">
                <option selected>Open this select menu</option>
                <option value="1">Športová výživa</option>
                <option value="2">Zdravé potraviny</option>
                <option value="3">Fitness oblečenie</option>
                <option value="4">Doplnky</option>
            </select>
        </div>

        <div class="ms-5 mb-2">
            <label class="form-label">Kategória</label>
            <select class="form-select" name="category2">
                <option selected>Open this select menu</option>
                <option value="1">Proteíny</option>
                <option value="2">Gainery a sacharidy</option>
                <option value="3">Vitamíny</option>
                <option value="4">Zdravé tuky a minerály</option>
                <option value="5">Ostatná výživa</option>
                <option value="6">Fitness jedlo</option>
                <option value="7">Obilniny a cereálie</option>
                <option value="9">Snacky</option>
                <option value="10">Nápoje</option>
                <option value="8">Prísady na varenie</option>
                <option value="11">Oblečenie pre mužov</option>
                <option value="12">Oblečenie pre ženy</option>
                <option value="13">Domáci tréning</option>
                <option value="14">Príslušenstvo</option>
                <option value="15">Ostatné</option>
            
            </select>
        </div>

        <div class="ms-5 mb-2">
            <label class="form-label">Podkategória</label>
            <select class="form-select" name="category3">
                <option selected>Open this select menu</option>
                 <option value="1">Proteínové izoláty</option>
                 <option value="2">Proteínové hydrolizáty</option>
                 <option value="3">Proteínové koncentráty</option>
                 <option value="4">Gainery</option>
                 <option value="5">Pomalé sacharidy</option>
                 <option value="6">Rýchle sacharidy</option>
                 <option value="7">Multivitamín</option>
                 <option value="8">Vitamín C</option>
                 <option value="9">Ostatné vitamíny</option>
                <option value="10">Omega-3</option>
                <option value="11">Magnézium</option>
                <option value="12">Zinok</option>
                <option value="13">Kreatín</option>
                <option value="14">BCAA</option>
                <option value="15">Spaľovače tukov</option>
                <option value="16">Orechové maslá</option>
                <option value="17">Nátierky</option>
                <option value="18">Orechy a semienka</option>
                <option value="19">Cereálie a musli</option>
                <option value="20">Ryžové kaše</option>
                <option value="21">Ovsené vločky</option>
                <option value="22">Oleje</option>
                <option value="23">Zmesi</option>
                <option value="24">Múky</option>
                <option value="25">Proteínové tyčinky</option>
                <option value="26">Proteínové cookies</option>
                <option value="27">Sušené mäso</option>
                <option value="28">Iontové nápoje</option>
                <option value="29">RTD nápoje</option>
                <option value="30">Šťavy</option>
                <option value="31">Tričká a tielka</option>
                <option value="32">Mikiny</option>
                <option value="33">Šortky</option>
                <option value="34">Tepláky</option>
                <option value="35">Legíny a tepláky</option>
                <option value="36">Funkčné oblečenie</option>
                <option value="37">Spodné prádlo</option>
                <option value="38">Športové prádlo</option>
                <option value="39">Šiltovky a čiapky</option>
                <option value="40">Švihadlá</option>
                <option value="41">Podložky na cvičenie</option>
                <option value="42">Fitlopty</option>
                <option value="43">Opasky na cvičenie</option>
                <option value="44">Šejkre</option>
                <option value="45">Trhačky</option>
                <option value="46">CBD</option>
                <option value="47">Blog</option>
                <option value="48">Značky</option>
            </select>
        </div>

        <div class="ms-5 mb-3">
            <label  class="form-label">Popis</label>
            <textarea class="form-control" name="product_info" rows="6"></textarea>
        </div>

        <div class="ms-5 mb-2">
            <label class="form-label">Cena produktu</label>
            <input type="number" class="form-control" step=".01" name="product_price">
        </div>

        <div class="ms-5 mb-3">
            <label for="formFile" class="form-label">Malý obrázok produktu</label>
            <input class="form-control" type="file" name="product_image_sm">
        </div>

        <div class="ms-5 mb-3">
            <label for="formFile" class="form-label">Veľký obrázok produktu</label>
            <input class="form-control" type="file" name="product_image_lg">
        </div>
        <button type="submit" name="submit" class="btn btn-success ms-5 mt-3 mb-5">Pridať</button>
    </form>
</div>



</body>
</html>