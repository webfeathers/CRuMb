<h1>About CRuMb</h1>

<h2>What it is</h2>
<p>First off, this is JUST a simple CRM. It's probably not what you need. You probably need SugarCRM, or Salesforce. Unless, you don't - then this <em>might</em> actually be for you. There is more information available on <a href="https://github.com/webfeathers/CRuMb">the GitHub page</a>.</p>

<?php if($role != ''){ //check to see user is logged in ?>
<h2>Definitions</h2>
<dl>
	<dt>Employee</dt>
	<dd>An employee is someone who works for the company using CRuMb. An employee may have an admin role,
		or not. By default, the admin section is only displayed to admins.</dd>
	
	<dt>Customers</dt>
	<dd>A Customer is someone who consumes your product - the Customer is with whom you've relationship
		that you want to manage.</dd>
	
	<dt>Distributor</dt>
	<dd>Remember, this app was originally created for a brewery - who can't sell alcohol to the 
		public directly - who needs to keep a relationship with Distributors. For the sake of simplicity, 
		a distributor is just someone who sells your product for you.</dd>
	
	<dt>Check-In</dt>
	<dd>Checking in...</dd>
	
	<dt>Follow-Up</dt>
	<dd>After you check in, you'll need to follow-up</dd>

</dl>

<?php } //end if user is logged in ?>