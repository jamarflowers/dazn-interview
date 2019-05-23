/***
    Jamar Flowers
    10/6/2018
    
    Breaking down a web crawler, working in the first section
    NOTE: MVC combined with a webcrawler??
    NOTE: HTML page to JSON converterd
    NOTE: scrapper for articles


***/

var request = require('request');
var cheerio = require('cheerio');
var URL = require('url-parse');

var site = "http://www.espn.com/nba/player/stats/_/id/3992/james-harden";
var url = new URL(site);

var numPagesVisited = 0
var pagesVisited = {};
var pagesToVisit = [];

function crawl() {
    if (numPagesVisited >= 10){
        console.log("MAX number reached...");
        return;
    }
    var nextPage = pagesToVisit.pop();
    if (nextPage in pagesToVisit){
        crawl();    
    } else {
        console.log("done")
        gotoPage(nextPage,crawl);
    }
}

function gotoPage(url,callback){
    numPagesVisited++;
    console.log("visiting....." + url);
    request(url, function(error, response, body){
        console.log("status code:" + response.statusCode);
        console.log(body);
    });
}

pagesToVisit.push(site);
crawl();



