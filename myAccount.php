<?php
/**
 * Class Name: None
 * Date: 07/27/17
 * Programmer: Matthew Corrente
 * Description: This module displays the user account information
 * Explanation of important functions: None.
 * Important data structures: None.
 * Algorithm choice: this class contains very basic functionality, so no specific algorithms were required.
 */

require("layout.php");
require_once("Customer.php");

if(!isset($_SESSION)) {
    session_start();
}

outputHeader("My Account", $_SESSION['user']->getUserId());

echo "<table>
        <tr style='border-bottom:1px solid #000000;'>First Name:&emsp;" . $_SESSION['user']->getFirstName(). "</tr><br/><br/>
        <tr style='border-bottom:1px solid #000000;'>Last Name:&emsp;" . $_SESSION['user']->getLastName(). "</tr><br/><br/>
        <tr style='border-bottom:1px solid #000000;'>Email:&emsp;" . $_SESSION['user']->getEmail() . "</tr><br/><br/>
        <tr style='border-bottom:1px solid #000000;'>Address:&emsp;" . $_SESSION['user']->getAddress() . "</tr><br/><br/>
        <tr style='border-bottom:1px solid #000000;'>Phone Number:&emsp;" . $_SESSION['user']->getPhoneNumber() . "</tr><br/><br/>
    </table>
    <form action='./editAccount.php' method='post'>
        <input type='hidden' name='user_id' value=" . $_SESSION['user']->getUserId(). " />
        <input type='submit' name='edit_account' value='Edit Account' />
	</form>			
	<form action='./changePassword.php' method='post'>
        <input type='hidden' name='user_id' value=" . $_SESSION['user']->getUserId(). " />
        <input type='submit' name='change_password' value='Change Password' />
	</form>	
    <form action='./viewTransactionHistory.php' method='post'>
        <input type='hidden' name='user_id' value=" . $_SESSION['user']->getUserId(). " />
        <input type='submit' name='view_history' value='View Transaction History' />
	</form>";


outputFooter();