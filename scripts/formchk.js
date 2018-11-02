/* 
		///////////////////////////////////////////////////////////////////////////////////////
		// Tim Hortons Ordering Coffee
		// 
		// current page : formchk.js 
		// page task : form validation : number value of quantity(>0), sugar and cream
		// Written by : Jieun Kwon
		// Written Date : March 16, 2018
		// updated Date : March 21, 2018
		// 
		// **related page**
		// index.html - order form 
		// confirm.php - order confirmation 
		// css/main.css - all css 
		///////////////////////////////////////////////////////////////////////////////////////
--*/

		// for form name;
		var formorder = document.timhortons;
  
 
		// Reset button event : reset form  
		function form_reset()
		{ 
			formorder.reset();
		}
		
		// Validation and Submit form 
		function form_submit()
		{
			// check Null and 0 value for quantity
			if( formorder.qty.value == "" || parseInt(formorder.qty.value) == 0 || isNaN(formorder.qty.value))
			{
				document.getElementById("chk_result").style.height = "20px";
				document.getElementById("chk_result").style.visibility = "visible";
				document.getElementById("chk_result").innerHTML = "Please enter the quantity for coffee order";
				
				formoder.qty.focus();
				return;
			}
			
			// check sugar value
			if( formorder.sugar.value == "" || isNaN(formorder.sugar.value))
			{
				document.getElementById("chk_result").style.height = "20px";
				document.getElementById("chk_result").style.visibility = "visible";
				document.getElementById("chk_result").innerHTML = "Please enter a number to add sugar";
				
				formoder.sugar.focus();
				return;
			}
			
			// check cream value
			if( formorder.cream.value == "" || isNaN(formorder.cream.value))
			{
				document.getElementById("chk_result").style.height = "20px";
				document.getElementById("chk_result").style.visibility = "visible";
				document.getElementById("chk_result").innerHTML = "Please enter a number to add cream";
				
				formoder.cream.focus();
				return;
			}
			 
			 
			// confirm and submit
			if(confirm("Do you want to submit?")){
				
				formorder.submit();
			}
			 
		}
		
		 
		// Message from confirm.php page 
		function form_confirm()
		{
			alert("Your order is completed. Thank you.");
		
		}			
		
		 
