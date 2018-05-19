window.onload = function () {
    var typeButton = document.querySelectorAll('input[name="type_button"]')
    var iconButton = document.getElementById('icon_button');
    // var textButton = document.getElementById('text_button');
    var textInButton = document.getElementById('text_in_button');
    var iconInButton = document.getElementById('icon_in_button');
    var nowAwesomeClass = document.getElementById('now_awesome_class');
    
  

  for (var i = 0; i < typeButton.length; i++) {
  
    typeButton[i].onchange = function(){
        console.log(this.value)
        if(this.value == 'text'){
            textInButton.classList.remove('hide-field');
            iconInButton.classList.remove('show-field');
            iconInButton.classList.add('hide-field');
            textInButton.classList.add('show-field');
        }
        if(this.value == 'icon'){
            iconInButton.classList.remove('hide-field');
            textInButton.classList.remove('show-field');
            textInButton.classList.add('hide-field');
            iconInButton.classList.add('show-field'); 
        }
    }
  }
  var iconNowInOption;
  for (var p = 0; p < iconInButton.children.length; p++) {
      
      if(nowAwesomeClass.value == iconInButton.children[p].value){
        iconNowInOption = (iconInButton.children[p].innerHTML);
      }
  }
  nowAwesomeClass.innerHTML =  iconNowInOption;
}
