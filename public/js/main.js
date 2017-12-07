$(document).ready(function (){
	
	// Get all "navbar-burger" elements
	var navbarBurgers = $('.navbar-burger');
	
	// Check if there are any navbar burgers
	if (navbarBurgers.length != 0) {
		
		// Add a click event on each of them
		navbarBurgers.each(function () {

			navbarBurgers.click(function(){

				// Toggle the class is-active for #navMenu and .nav-burger
				$(navbarBurgers).toggleClass("is-active");
				$("#" + this.dataset.target).toggleClass("is-active");

			});
		});
	}
		
	// Get the dropdown region
	var region = $("#jforms_tourisme_activity_region");
	
	// Check if there is the drowpdown
	if (region.length != 0){
		
		// Add a onchange event
		region.change(function(){
			
			$("#jforms_tourisme_activity_city").html("");
			$("#jforms_tourisme_activity_department").html("");
			
			$.getJSON("http://localhost:8080/tourisme/www/index.php?module=tourisme&action=form:fillDepartments&id=" + this.value, function(data){
				
				var options = [];
				$.each(data, function(i, department){
					
					options.push("<option value=" + department.departmentId + ">" + department.departmentNumber + " - " + department.departmentName + "</option>");
					
				});
				
				$("#jforms_tourisme_activity_department").append(options);
				$("#jforms_tourisme_activity_department").change();
				
			});
		});
		
			
	}
	
	// Get the dropdown region
	var department = $("#jforms_tourisme_activity_department");
	
	// Check if there is the drowpdown
	if (department.length != 0){
		
		// Add a onchange event
		department.change(function(){
						
			$("#jforms_tourisme_activity_city").html("");
			
			$.getJSON("http://localhost:8080/tourisme/www/index.php?module=tourisme&action=form:fillCities&id=" + this.value, function(data){
				
				var options = [];
				$.each(data, function(i, city){
					
					options.push("<option value=" + city.cityId + ">" + city.cityPostalCode + " - " + city.cityName + "</option>");
					
				});
				
				$("#jforms_tourisme_activity_city").append(options);
				
			});
		});
	}
	
	// Initialize the drowpdown with the default selected region
	$("#jforms_tourisme_activity_region").change();
	
});