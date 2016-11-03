
  <br><br>
   <div class="wrapper">
    {foreach from=$result1 item=twoItem}
    <section>
        <article>
             {$frame1}{$twoItem.url}{$frame2}
        </article>
        <br>
    </section>
    {/foreach}
</div>
