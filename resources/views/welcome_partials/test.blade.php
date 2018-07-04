
<form>
  <p>
    <label for="name">Name: </label><input type="text" id="name">
  </p>
  <p>
    <label for="email">Email: </label><input type="text" id="email">
  </p>
  <p>
    <label for="font">Font: </label>
    <select id="font">
      <option value="">Please select</option>
      <option value='Arial'>Arial</option>
      <option value='Times New Roman'>Black Chancery</option>
      <option value='Comic Sans MS'>Comic Sans</option>
      <option value='Verdana'>Verdana</option>
    </select>
  </p>
  <p>
    <label for="color">Color: </label><input type="text" id="color">
  </p>
  <p>Preview: <span id="preview"></span></p>

  <input type='submit' value='Add name'>
</form>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
	function updatePreview(obj){
	  $("#preview").css(obj);
	}

	$("#font").on("change", function(){
	  updatePreview({"font-family": this.value});
	});

	$("#color").on("keyup", function(){
	  updatePreview({"color": this.value});
	});

	$("#name").on("keyup", function(){
	  m$("#preview").text(this.value);
	});
</script>

