window.onload=function() {
	var liigu=document.getElementsByClassName("bead");
	for (var i = 0; i < liigu.length; i++){
		liigu[i].onclick=function(){
			var floatvalue=getComputedStyle(this,null).getPropertyValue("float");
				if (floatvalue=="left"){
					this.style.cssFloat="right";
				}
			else {this.style.cssFloat="left";
			}
		}	
	}
}
