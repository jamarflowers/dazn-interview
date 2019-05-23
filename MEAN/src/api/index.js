'use strict';

let express = require('express');
let todos = require('../../mock/todos.json');

let router = express.Router();

router.get('/todos', function(req,res){
    res.json({todos: todos});
});

//add POST for new entries 
//add PUT to update existing entries
//add delet route to delete entries

module.exports = router;
///MEAN/mock/todos.json
///MEAN/src/api/index.js