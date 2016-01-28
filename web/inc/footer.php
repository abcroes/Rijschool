<div class="nieuwsbrief">
<img src="http://rijschoolrocket.freaze.eu/Rocket_Bootstrap/resources/img/portaal_logo.png" width="15px">
</div>
<footer>
	<div class="container">
		<div class="footer-info">
			<a href="voorwaarden.php">Algemene voorwaarden</a> - <a href="vacatures.php">Vacatures</a>
		</div>
	</div>
</footer>
<script type="text/javascript" language="javascript">
                var slideArray = new Array()
                                    slideArray[0]= '<div class="col-md-10"><font style="font-weight: bold;">Johan Derksen:</font> In een keer mijn rijbewijs bedankt!q</div><div style="float: right; margin-right: 15px;"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star-empty"></i></div>';
                                    slideArray[1]= '<div class="col-md-10"><font style="font-weight: bold;">Donna Visser:</font> In een keer geslaagd voor me auto theorie! Super blij! Dankzij Rijschool Rocket! </div><div style="float: right; margin-right: 15px;"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>';
                                    slideArray[2]= '<div class="col-md-10"><font style="font-weight: bold;">Vivian Hafkamp‎:</font> Gezellige en leerzame rijlessen gehad, en binnen 15 lessen in 1x voor mijn praktijkexamen geslaagd!!</div><div style="float: right; margin-right: 15px;"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>';

                                
                function textSlideShow(previous)
                {
                    if(typeof previous != 'undefined' && previous < slideArray.length)
                    {
                        document.getElementById('user-review').innerHTML = slideArray[0 + previous];  //EERSTE TEKST
                        previous++;
                    }
                    else if(typeof previous == 'undefined' || previous == slideArray.length)
                    {
                        document.getElementById('user-review').innerHTML = slideArray[0]; //EERSTE TEKST
                        previous = 1;
                    }
                    
                    setTimeout("textSlideShow(" + previous + ")",5000);
                }
                
                textSlideShow();
</script>

</body>
</html>