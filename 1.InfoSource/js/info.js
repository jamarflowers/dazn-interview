function giphyImage(searchTerm){

//    https://api.giphy.com/v1/gifs/search?api_key=3XwNq73468C8UoNWARFZdtXLcjGgg4BX&q=science&limit=25&offset=0&rating=G&lang=en
var imageRequest = new XMLHttpRequest();
var imageUrl = "https://api.giphy.com/v1/gifs/search?api_key=3XwNq73468C8UoNWARFZdtXLcjGgg4BX&q="+searchTerm+"&limit=25&offset=0&rating=G&lang=en";
imageRequest.open('GET',imageUrl);

    imageRequest.onload = function(){}
    var res = JSON.parse(this.response);
}



var Newsrequest = new XMLHttpRequest();
var Newsurl = "https://api.nytimes.com/svc/topstories/v2/science.json?api-key=q5SoRAwGcrPYS7sRAlWw3HONTUab0y5C";
Newsrequest.open('GET',Newsurl);

    Newsrequest.onload = function(){
        // NYTIMES Json Response
        var res = JSON.parse(this.response);
        var results_number = res.results;
        
        var num = results_number.length;
        var count;
        
        console.log(num);
        console.log(res);
      
        var ContentTile;
        var image;
        var TitleNode;
        var divlink;
        var a;
        
        for(count=0;count<=num;count++){
            // creates content tile inside of content area
            ContentTile = document.createElement("div");
            //console.log(res.results["0"].multimedia[2].url);
               ContentTile.className = "newsTile";
              
               document.getElementById('content').appendChild(ContentTile);
            // create a short linke attachted to new title    
           divlink = document.createElement("div"); 
               divlink.id = "shortLink";
               ContentTile.appendChild(divlink);
            // attaches link to link area inside of content tile   
           a = document.createElement('a');
               TitleNode = document.createTextNode(res.results[count].title);
               a.href = res.results[count].short_url;
               a.appendChild(TitleNode);
               divlink.appendChild(a);            
               console.log(res.results[count].section);
        }   
            

    };
    Newsrequest.send();
 