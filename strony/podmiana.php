<div id="content">
	<div id="tytu"><div id="ttlo">Zmienna zawartość Ajax</div></div>
	<div id="zawa">
  <br />
  <p>
    <img src="img/01.jpg" alt="Picture 1"></img>
  </p>

	</div>
  <p id="menu">
  <a href="strony/obrazkiajax/04.html" class="btn_blue">Picture 1</a>
  <a href="strony/obrazkiajax/03.html" class="btn_blue">Picture 2</a>
  <a href="strony/obrazkiajax/02.html" class="btn_blue">Picture 3</a>
  <a href="strony/obrazkiajax/01.html" class="btn_blue">Picture 4</a>
  </p>
</div>

<script type="text/javascript">
  $("#menu a").click(function(){
    $("#zawa").load(this.href);
    return false;
  })
</script>
