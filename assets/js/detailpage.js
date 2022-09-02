

            var MainImage = document.getElementById('MainImg');
            var smalling1 = document.getElementById('small-img');
            var smalling2= document.getElementById('small-img2');
            var smalling3 = document.getElementById('small-img3');
            var smalling4 = document.getElementById('small-img4');

            smalling1.onclick = function(){
                MainImage.src = smalling1.src;
            }
            smalling2.onclick = function(){
                MainImage.src = smalling2.src;
            }
            smalling3.onclick = function(){
                MainImage.src = smalling3.src;
            }
            smalling4.onclick = function(){
                MainImage.src = smalling4.src;
            }