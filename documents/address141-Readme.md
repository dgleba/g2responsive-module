**Address141 app Readme.md**
---
2014-02-27 Rev.3

---

Introduction

--

Address141 is a sample Xataface app that implements the g2responsive module.

Refer to the g2responsive module readme for more information on that module.

---

**Installation:**

---

1. Copy the app to your apache document root

2. Create the config.dbc file per the example supplied and place your database credentials in that file.

3. Use the address2.sql file to create the tables in mysql. 

3. Install the Xataface g2 module - it is required for g2responsive.

4. Navigate to the app with your browser.

5. You may have to comment out the following line in the conf.ini to get the app started.

  ```
    dashboard="Dashboard"
  ```
6. Then uncomment it when the app is running.

7. Connect to your app .. Sometimes you may have to refresh the page twice (waiting for it to fully load each time.)
8. When the app is viewed on a screen less than 800 px wide the layout adjusts to fit itself to smaller screens. You can try that behaviour out on a desktop computer by making the browser window narrower.

---

By: David Gleba and Oliver Clarke