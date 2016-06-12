*** settings ***
Library    Selenium2Library

*** Test cases ***
AddBook Success: The Old Man and The Sae
    Open Browser   http://128.199.86.22/   chrome
    
    Click Button    addbtn
    Page Should Contain    ชื่อ
    Input Text    name     The Old Man and The Sae 
    Input Text    authur     Ernest Hemingway
    Input Text    publisher    Scribner
    Click Button    addDB 
    Page Should Contain    The Old Man and The Sae 


AddBook Success:พันธุ์หมาบ้า
    Click Button    addbtn
    Page Should Contain    ชื่อ
    Input Text    name     พันธุ์หมาบ้า 
    Input Text    authur     ชาติ กอบจิตติ
    Input Text    publisher    หอน
    Click Button    addDB  
    Page Should Contain    พันธุ์หมาบ้า 

AddBook Success:Clean Code A Handbook of Agile Software Craftsmanship
    Click Button    addbtn
    Page Should Contain    ชื่อ
    Input Text    name     Clean Code:A Handbook of Agile Software Craftsmanship
    Input Text    authur     Robert C. Martin
    Input Text    publisher    Prentice Hall
    Click Button    addDB  
    Page Should Contain    Clean Code:A Handbook of Agile Software Craftsmanship


AddBook Success:The Pragmatic Programmer From Journeyman to master
    Click Button    addbtn
    Page Should Contain    ชื่อ
    Input Text    name     The Pragmatic Programmer : From Journeyman to master
    Input Text    authur     Andrew Hunt, Dave Thomas
    Input Text    publisher     Addison-wesley
    Click Button    addDB   
    Page Should Contain    The Pragmatic Programmer : From Journeyman to master
    close Browser
  

    
    




