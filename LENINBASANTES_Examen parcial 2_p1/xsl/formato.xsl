<?xsl version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="ciclos">
<html>
<head>
<title>Agenda</title>
	
</head>
<body>
<p>LO MAS BARATO EN SISTEMAS</p>
<p>http://www.lomasbarato.com</p>
<xsl:for-each select="ciclo">
<div class="ciclo">
	
  <ul>
    <li><xsl:value-of select="nombre"/></li>
    <li><xsl:value-of select="grado"/></li>
    <li><xsl:value-of select="decretoTitulo"/></li> 
  </ul>
</div>
</xsl:for-each>

<p>LO MAS BARATO EN SISTEMAS</p>
<p>http://www.lomasbarato.com</p>
<xsl:for-each select="ciclo">
<div class="ciclo">
	
  <ul>
    <sd><xsl:value-of select="nombre"/></sd>
    <li><xsl:value-of select="grado"/></li>
    <li><xsl:value-of select="decretoTitulo"/></li> 
  </ul>
</div>
</xsl:for-each>


<p>LO MAS BARATO EN SISTEMAS</p>
<p>http://www.lomasbarato.com</p>
<xsl:for-each select="ciclo">
<div class="ciclo">
<table class="blueTable">
<thead>
<tr>
<th><xsl:value-of select="nombre"/></th>
<td><xsl:value-of select="grado"/></td>
<td><xsl:value-of select="decretoTitulo"/></td>
</tr>
</thead>
</table>
</div>
</xsl:for-each>


</body>
</html>
</xsl:template>
</xsl:stylesheet> 