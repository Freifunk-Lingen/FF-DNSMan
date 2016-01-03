<?php

function getParameter($VAR) {
    if (isset($_GET[$VAR])) {
        return $_GET[$VAR];
        
    }
}

function getData($VAR) {
    if (isset($_POST[$VAR])) {
        return $_POST[$VAR];
        
    }
}

function getTitle() {
        return "FF-DNSMan";
    }
