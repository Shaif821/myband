
<div class="admin">
<h2>Ingelogd als {$name}</h2>

<form action="model/logout.php">
  <button>Uitloggen</button>
    </form>
    </div>
    
    <div class="content">
   <h1 class="insert">Voeg nieuwe artikelen toe</h1>
   <form method="POST" action="model/insert_newsarticles.php" class="log" enctype="multipart/form-data">
       Afbeelding:<br><input type="file" name="afb" placeholder="Bestand kiezen..."><br>
       Title:<br><input type="text" name="title" placeholder="Vul in..."><br>
       Content:<br><textarea style="height:300px; width: 500px;" type="text" name="cont" placeholder="Vul in..."></textarea><br>
       Video <br>(rechter muisklik op Youtube video en Video-url kopiëren):<br><input type="text" name="vid" placeholder="Vul de url in"><br>
       <br>
       <button type="submit" name="sub">Plaatsen</button>
   </form>
   <br><br>
   
   <hr>
   <div class="admin">
   <h2>Hier kan je nieuwe tracks toevoegen aan de muziek pagina</h2>
   </div>
   <form method="POST" action="model/insert_url.php" class="log" style="background:white; text-align:center;">
       Hieronder kan je Video-url kopiëren. Deze worden toegevoegd aan de Muziek tab<br>
       <input type="text" name="url" placeholder="https://youtu.be/....."><br>
       <button type="submit"> Plaatsen</button>
   </form>
   
   <br>
   
   <hr>
   <div class="delete">
       <h2>Artikelen verwijderen:</h2>
       <form method="POST" action="model/delete_article.php">
       {foreach from=$result3 item=threeItem}
        <div style="border: 2px solid black;">
       <h3>{$threeItem.title}</h3><input type="radio" name="del" value="{$threeItem.id}"><br>
       <button name="submit" type="submit">Verwijderen</button>
       </div>
       {/foreach}
       </form>
      
   </div>
   
  </div>