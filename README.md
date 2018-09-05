# BLANK PROJECT

Minimal structure for new site projects

## classes folder
---
- All PHP classes own and vendor like PHPMailler

## css folder
---
- Use SASS, main.scss file include all files from base folder
- Files on the root folder with .css extesion are not tracked with SASS
- Vendors folder are designated to store any code not created from us
- To process the SASS code on local machine we use [Koala](http://koala-app.com/)

## favicon folder
---
- Folder to store favicon files
- We use [Favicon Generator](http://www.favicon-generator.org/) the to prepare the files

## img folder
---
- all project images must be saved here

## URL Configr
---
Solicitar no chat:
"Preciso configurar url amigável no site.
As regras seriam:
- 1.Na raiz tenha regra para ir tudo para index.php (já é padrão no configr)
- 2.Em /painel que vá tudo para /painel/index.php
"

## includes folder
---
- All PHP files must be saved here, the index.php will include the right file.
- Default files are:

| File          | Function                        |
| ------------- |:-------------------------------:|
| 404.php       | 404 error                       |
| db.php        | Database conection example      |
| default.php   | Default home page               |
| redir.php     | Redirection 301 example         |


## js
---
- All javascript files must be saved here
- Jquery and Modernizr are load from the official CDN

# REFERENCES
- [Batalha Less vs Estilus vs Sass] (https://tableless.com.br/sass-vs-less-vs-stylus-batalha-dos-pre-processadores/)
- [Um outro metodo de escrever css] (https://tableless.com.br/sass-um-outro-metodo-de-escrever-css/)
- [SASS Guia em PT-BR] (https://sass-guidelin.es/pt/#arquitetura)
- [SASS Guia em Inglês] (http://sass-lang.com/documentation/file.SASS_REFERENCE.html)
- [SASS Pixel responsive] (https://medium.com/@_qichen/responsive-pixel-an-alternative-to-media-query-for-responsive-resizing-1101ae62c5b3)
- [Beginners to SASS] (https://www.webdesignerdepot.com/2013/11/the-beginners-guide-to-sass/)

# TYPOGRAPHY REFERENCES
- [Precise Control Responsive Typography (fix Edge scale bug)] (https://madebymike.com.au/writing/precise-control-responsive-typography/)
- [Example showed on post above] (https://codepen.io/MadeByMike/pen/YPJJYv?editors=110)

- [Viewport based typography] (<https://zellwk.com/blog/viewport-based-typography/>)
- [Responsive typography] (<https://zellwk.com/blog/responsive-typography/>)
- [Fluid Typography] (https://www.smashingmagazine.com/2016/05/fluid-typography/)
- [Typography] (https://pearsonified.com/typography/)
- [Responsive Pixel / typography] (https://medium.com/@_qichen/responsive-pixel-an-alternative-to-media-query-for-responsive-resizing-1101ae62c5b3)

# MARKDOWN REFERENCES
- [Markdown Cheatsheet] (https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)
