{foreach from=$traycardCols key=k item=item name=count}
  <div class="traycard-column">
    <table class="traycard {if $k == 2} last-table{/if}">
      <tr>
        <td colspan="2" class="text-strong text-18 text-center">{$item->meal_name}</td>
      </tr>
      {if $birthday}
      <tr>
        <td colspan="2" class="text-green text-center text-18">Happy Birthday!</td>
      </tr>
      {/if}
      <tr>
        <td class="text-strong">Diet Order:</td>
        <td>{$item->diet_order}</td>
      </tr>
      <tr>
        <td class="text-strong">Textures:</td>
        <td>{$item->textures}</td>
      </tr>
      <tr>
        <td class="text-strong">Portion Size:</td>
        <td>{$item->portion_size}</td>
      </tr>
      <tr>
        <td class="text-red text-italics text-strong">Allergies:</td>
        <td class="text-red text-italics text-strong">{$item->allergies}</td>
      </tr>
      <tr>
        <td class="text-strong">Orders:</td>
        <td>{$item->orders}</td>
      </tr>
      <tr>
        <td class="text-strong">Special Requests:</td>
        <td>{$item->spec_req|default:"None"}</td>
      </tr>
      <tr>
        <td class="text-strong">Beverages:</td>
        <td>{$item->beverages}</td>
      </tr>
      <tr>
        <td class="text-strong">Do Not Serve:</td>
        <td>{$item->dislikes}</td>
      </tr>
      <tr>
        <td class="text-strong" width="150">Percent Consumed:</td>
        <td class="text-center text-10" style="padding-top:9px;">0-25 &nbsp;&nbsp; 26-50 &nbsp;&nbsp; 51-75 &nbsp;&nbsp; 76-100</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" class="text-center text-18">{$selectedDate|date_format}</td>
      </tr>
      <tr>
        <td colspan="2" class="text-center text-20 text-strong">{$patient->number} &mdash; {$patient->last_name}, {$patient->first_name}</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>

      <tr>
        <td class="text-center" colspan="2"><img src="{$IMAGES}/ahc_logo.png" width="200px" alt=""></td>
      </tr>

    </table>
  </div>
  {/foreach}

