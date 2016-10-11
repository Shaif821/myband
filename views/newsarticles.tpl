<section>
  <hr>
   {foreach from=$result item=oneItem}
   <article>
       <h1>{$oneItem.title}</h1>
       <img class="artimg" src="Afbeeldingen/{$oneItem.image}"><br><br>
       <content>{$oneItem.content}</content><br>
       <br>
<!--       <p>{$oneItem.date_created|date_format:"%d %B %Y"}</p>   -->
  <p>{$oneItem.date_created|date_format:"%d %B %Y"}</p>
  <hr>
    </article>
   {/foreach}

</section>
















