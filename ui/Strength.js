function checkStrength()
{
	 var x = 0, i, uc=0, lc=0, no=0;
	 var txt = document.forms["form1"]["matpass1"].value;
	 var l = txt.length;
	 if(l >= 8 && l < 12)
	 {
		  x++;
	 }
	 else if(l >= 12)
	 {
		  x += 2;
	 }
	 for(i = 0; i < l; i++)
	 {
		  if(txt[i] === txt[i].toUpperCase())
		  {
			   uc++;
		  }
		  else if(txt[i] === txt[i].toLowerCase())
		  {
			   lc++;
		  }
		  if(!isNaN(txt[i]))
		  {
			   no++;
		  }
	 }
	 if(uc > 2)
	 {
		  x++;
	 }
	 if(lc > 2)
	 {
		  x++;
	 }
	 if(no > 1)
	 {
		  x++;
	 }
	 if(x <= 2)
	 {
		 document.getElementById("str").innerHTML = "Weak";  
	 }
	 else if(x >=3 && x <=4)
	 {
		 document.getElementById("str").innerHTML = "Moderate";
	 }
	 else
	 {
		  document.getElementById("str").innerHTML = "Strong";
	 }
}
