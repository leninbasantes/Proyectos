<?xsl version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="pelicula">
<html>
<head>
<title>Ejercicio 1</title>
<link rel="stylesheet" type="text/css" href="./css/estilo1.css" />
</head>
<body>
<ul>
<li> <xsl:value-of select="nombreCentro"></li>
<li> <xsl:value-of select="web"></li>	
<xsl:for-each select ="ciclo">
<li> <xsl:value-of select="nombre"></li>	
<li> <xsl:value-of select="grado"></li>	
<li> <xsl:value-of select="decretoTitulo"></li>	
</xsl:for-each>
</ul>
</body>
</html>
</xsl:template>
</xsl:stylesheet> 