<?xsl version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="pelicula">
<html>
<head>
<title>Agenda</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
</head>
<body>
<h1>Agenda</h1>

<xsl:for-each select="personaje">
<div class="personaje">
  <h3>Personaje número: <xsl:value-of select="@numero"/></h3>
  <div style="width: 70px; float: top;">
     <xsl:element name="img">
       <xsl:attribute name="src">
         <xsl:value-of select="dibujo/@ruta"/>
       </xsl:attribute>
       <xsl:attribute name="height">
         100
       </xsl:attribute>
     </xsl:element>
</div>	
  <ul>
    <li><xsl:value-of select="nombre"/></li>
    <li><xsl:value-of select="telefono"/></li>
    <li><xsl:value-of select="email"/></li>
	 <li>
      <a>
        <xsl:attribute name="href">
          <xsl:value-of select="web/@enlace"/>
        </xsl:attribute>
        <xsl:value-of select="web"/>
      </a>
    </li>  
  </ul>
</div>
</xsl:for-each>

</body>
</html>
</xsl:template>
</xsl:stylesheet> 