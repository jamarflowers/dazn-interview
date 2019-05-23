
var request = new XMLHttpRequest();
var url = "https://api.giphy.com/v1/gifs/search?api_key=UizcDai6PdxfebQQg5RGt8ba7PS954em&q=fin&limit=25&offset=0&rating=G&lang=en";
request.open('GET',url);
      
      request.onload = function(){
        // giphy Json Response
        var res = JSON.parse(this.response);
        console.log(res);
        };
        
        
        
 request.send();
    
 