<?include "header.php";?>


  <style>
    fieldset {
      border: 0;
    }
    label {
      display: block;
      margin: 30px 0 0 0;
    }
    .overflow {
      height: 200px;
    }
  </style>


<div class="demo">

<form action="#">

  <fieldset>
    <label for="speed">Select a speed</label>
    <select name="speed" id="speed">
      <option>Slower</option>
      <option>Slow</option>
      <option selected="selected">Medium</option>
      <option>Fast</option>
      <option>Faster</option>
    </select>

    <label for="files">Select a file</label>
    <select name="files" id="files">
      <optgroup label="Scripts">
        <option value="jquery">jQuery.js</option>
        <option value="jqueryui">ui.jQuery.js</option>
      </optgroup>
      <optgroup label="Other files">
        <option value="somefile">Some unknown file</option>
        <option value="someotherfile">Some other file with a very long option text</option>
      </optgroup>
    </select>

    <label for="salutation">Select a title</label>
    <select name="salutation" id="salutation">
      <option disabled selected>Please pick one</option>
      <option>Mr.</option>
      <option>Mrs.</option>
      <option>Dr.</option>
      <option>Prof.</option>
      <option>Other</option>
    </select>
  </fieldset>

</form>

</div>


<?include "footer.php";?>
