<?php
//Check for empty result field
function confirm_query($result_set){
    if(!result_set){
        die("No results returned from database query.");
    }
}
//USERS functions

//find ALL users, sorted by ID descending.
function find_all_users(){
    $query = "SELECT * ";
    $query .= "FROM users";
    $query .= "ORDER BY userID DESC";
    $user_set = mysqli_query($link, $query);
    confirm_query($user_set);
}
//find one user with name like $search string
 function find_user(search){
     $query = "SELECT * ";
    $query .= "FROM users ";
     $query .= "WHERE user like " . search . " ";
     $user_set = mysqli_query($link, $query);
     confirm_query($user_set);
 }
//return team members
function find_team_members(stID){
    $query = "SELECT * ";
        $query .= "FROM users ";
    $query .= "WHERE storeID = " . stID . " ";
    $user_set = mysqli_query($link, $query);
    confirm_query($user_set);
}

//adduser query
function add_user(){
    
}
//modify use query
function modify_user(){
    
}
//remove user query
function remove_user(){
    
}

//ITEMS function
function find_all_items(){
    $query = "SELECT * ";
    $query .= "FROM item";
    $query .= "ORDER BY itemID DESC";
    $item_set = mysqli_query($link, $query);
    confirm_query($item_set);
}

 function find_item(search){
     $query = "SELECT *";
    $query .= "FROM item";
     $query .= "WHERE itemName like " . search . " ";
     $item_set = mysqli_query($link, $query);
     confirm_query($item_set);
 }


