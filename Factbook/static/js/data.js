// CIA FACTBOOK PROJECT
// JAMAR FLOWERS
// 2/10/2019

var request = new XMLHttpRequest();
var url = "https://raw.githubusercontent.com/iancoleman/cia_world_factbook_api/master/data/factbook.json";
request.open('GET',url);

    request.onload = function(){
        // Factbook Json Response
        var res = JSON.parse(this.response);
        var countries = res['countries'];
        // access Json Objects
        
        //UNITED STATES
        var america = countries.united_states['data'].name;
        var us_hist = countries.united_states['data'].introduction['background'];
        var us_geography= countries.united_states['data'].geography;
        var us_people= countries.united_states['data'].people;
        var us_goverment=countries.united_states['data'].government;
        var us_economy=countries.united_states['data'].economy;
        
        //RUSSIA
        var russia = countries.russia['data'].name;
        var ru_geography= countries.russia['data'].geography;
        var ru_people= countries.russia['data'].people;
        var ru_goverment=countries.russia['data'].government;
        var ru_economy=countries.russia['data'].economy;
        
        // US section 1 includes: (Name,location,map name,capital, natural resorces)
        // name
        document.getElementById("us-name").innerHTML= america;
        //map reference
        document.getElementById("us-mapname").innerHTML = us_geography.map_references;
       
         // location
        document.getElementById("us-location").innerHTML = us_geography.location;
        // comparitive 
        document.getElementById("us-comparative").innerHTML = us_geography.area.comparative;
        // US capital
        document.getElementById("us-capital").innerHTML = "US Capital: " + us_goverment.capital.name;
        //natural resorces
        document.getElementById("us-natural").innerHTML = us_geography.natural_resources.resources.length + " Natural Resources";
        
        
        // languages 1-4
        document.getElementById("us-language").innerHTML =
                                            us_people.languages.language["0"].name + "<br>" +
                                            us_people.languages.language["1"].name + "<br>" +
                                            us_people.languages.language["2"].name + "<br>" +
                                            us_people.languages.language["3"].name + "<br>"
                                            ;
        // age averages
        document.getElementById("us-age").innerHTML =
                                                     "Population 0 to 14: " + us_people.age_structure["0_to_14"].percent   + "<br>" +
                                                     "Population 15 to 24: " + us_people.age_structure["15_to_24"].percent + "<br>" +
                                                     "Population 25 to 54: " + us_people.age_structure["25_to_54"].percent + "<br>" +
                                                     "Population 55 to 64: " + us_people.age_structure["55_to_64"].percent + "<br>" +
                                                     "Population 65 and over: " + us_people.age_structure["65_and_over"].percent;
        // Death rate
        document.getElementById("us-birth").innerHTML = "Death rate per 1000 " + us_people.death_rate.deaths_per_1000_population;
        // Birth rate
        document.getElementById("us-death").innerHTML = "Birth rate per 1000 " + us_people.birth_rate.births_per_1000_population;
        //population Distribution..............................
        //Ethnicity
        document.getElementById("us-ethnicity").innerHTML = 
        us_people.ethnic_groups.ethnicity["0"].name+ ": " +us_people.ethnic_groups.ethnicity["0"].percent+ "<br>" +
   
        us_people.ethnic_groups.ethnicity["1"].name+ ": " +us_people.ethnic_groups.ethnicity["1"].percent+ "<br>" +
   
        us_people.ethnic_groups.ethnicity["2"].name+ ": " +us_people.ethnic_groups.ethnicity["2"].percent+ "<br>" +
 
        us_people.ethnic_groups.ethnicity["3"].name+ ": " +us_people.ethnic_groups.ethnicity["3"].percent+ "<br>" +
  
        us_people.ethnic_groups.ethnicity["4"].name+ ": " +us_people.ethnic_groups.ethnicity["4"].percent+ "<br>" +
   
        us_people.ethnic_groups.ethnicity["5"].name+ ": " +us_people.ethnic_groups.ethnicity["5"].percent+ "<br>" +

        us_people.ethnic_groups.ethnicity["6"].name+ ": " +us_people.ethnic_groups.ethnicity["6"].percent;
        
        document.getElementById("ru-name").innerHTML = russia;
        //map reference
        document.getElementById("ru-mapname").innerHTML = ru_geography.map_references;
       
         // location
        document.getElementById("ru-location").innerHTML = ru_geography.location;
        // comparitive 
        document.getElementById("ru-comparative").innerHTML = ru_geography.area.comparative;
        // US capital
        document.getElementById("ru-capital").innerHTML = "russia Capital: " + ru_goverment.capital.name;
        //natural resorces
        document.getElementById("ru-natural").innerHTML = ru_geography.natural_resources.resources.length + " Natural Resources";
        
                // languages 1-4
        document.getElementById("ru-language").innerHTML =
                                            ru_people.languages.language["0"].name + "<br>" +
                                            ru_people.languages.language["1"].name + "<br>" +
                                            ru_people.languages.language["2"].name + "<br>" +
                                            ru_people.languages.language["3"].name + "<br>"
                                            ;
        // age averages
        document.getElementById("ru-age").innerHTML =
                                                     "Population 0 to 14: " + ru_people.age_structure["0_to_14"].percent   + "<br>" +
                                                     "Population 15 to 24: " + ru_people.age_structure["15_to_24"].percent + "<br>" +
                                                     "Population 25 to 54: " + ru_people.age_structure["25_to_54"].percent + "<br>" +
                                                     "Population 55 to 64: " + ru_people.age_structure["55_to_64"].percent + "<br>" +
                                                     "Population 65 and over: " + ru_people.age_structure["65_and_over"].percent;
        // Death rate
        document.getElementById("ru-birth").innerHTML = "Death rate per 1000 " + ru_people.death_rate.deaths_per_1000_population;
        // Birth rate
        document.getElementById("ru-death").innerHTML = "Birth rate per 1000 " + ru_people.birth_rate.births_per_1000_population;
        //population Distribution..............................
        //Ethnicity
        document.getElementById("ru-ethnicity").innerHTML = 
        ru_people.ethnic_groups.ethnicity["0"].name+ ": " +ru_people.ethnic_groups.ethnicity["0"].percent+ "<br>" +
   
        ru_people.ethnic_groups.ethnicity["1"].name+ ": " +ru_people.ethnic_groups.ethnicity["1"].percent+ "<br>" +
   
        ru_people.ethnic_groups.ethnicity["2"].name+ ": " +ru_people.ethnic_groups.ethnicity["2"].percent+ "<br>" +
 
        ru_people.ethnic_groups.ethnicity["3"].name+ ": " +ru_people.ethnic_groups.ethnicity["3"].percent+ "<br>" +
  
        ru_people.ethnic_groups.ethnicity["4"].name+ ": " +ru_people.ethnic_groups.ethnicity["4"].percent+ "<br>" +
   
        ru_people.ethnic_groups.ethnicity["5"].name+ ": " +ru_people.ethnic_groups.ethnicity["5"].percent+ "<br>" +

        ru_people.ethnic_groups.ethnicity["6"].name+ ": " +ru_people.ethnic_groups.ethnicity["6"].percent;
        
    };
    request.send();

