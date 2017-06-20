# Dynamic-Dropdown
This part of the web application was completed as a milestone.
We developed a dropdown from where we can select handworker categories and their subcategories.

To update this feature in your web application, the user needs to import the database from local server and place the dropdown.php file in the HTDOCS folder of your respective local server client such as XAMPP/WAMPP/MAMPP.


Initialization
Simple initialization with utf8 charset set by default:

$db = new MysqliDb ('host', 'username', 'password', 'databaseName');


Select Query
After any select/get function calls amount or returned rows is stored in $count variable

$db2->where('parentid', '0');
$levels1 = $db2->get('category');

$db2->where('parentid', $level1['id']);
  $levels2 = $db2->get('category');
  $submenu_1 = '';
  $ulmenu_1 = '';
  $sub_text_1 = '';
  
  
  For this update to work properly, you must make sure of server runnability.
  Thats all for today :)
