<h1 style="text-align:center;">De Laatste nieuws over {$title}</h1>
   <div class="wrapper">
   {foreach from=$result item=oneItem}
   <section>
   <article>
       <h1>{$oneItem.title}</h1>
       <hr>
       {if !empty($oneItem.image)}
       <img class="artimg" src="model/{$oneItem.image}"><br><br>
       {/if}
       <content>{$oneItem.content}</content><br>
       <p>
      {if !$oneItem.video}
            {$oneItem.date_created|date_format:"%d %B %Y"}
            {else}
            {$frame1}{$oneItem.video}{$frame2}
            {$oneItem.date_created|date_format:"%d %B %Y"}
            {/if}
           </p>
    </article>
        <br><br>
    </section>

   {/foreach}
    
</div>
  
<!--
       <video controls>
       <source src="../Video/".{$oneItem.video}." type='video/mp4'">
       </video>
-->










