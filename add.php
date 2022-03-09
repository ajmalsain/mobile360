&lt;?php<br>
$s1=$_POST['t1'];<br>
$s2=$_POST['t2'];<br>
$s3=$_POST['t3'];<br>
<br>
?&gt;<br>
&lt;table width=&quot;368&quot; border=&quot;1&quot;&gt;<br>
&lt;tr&gt;<br>
&lt;td width=&quot;134&quot; class=&quot;style5&quot;&gt;Product Name&lt;/td&gt;<br>
&lt;td width=&quot;218&quot;&gt;&lt;?php echo $s1 ?&gt;&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;tr&gt;<br>
&lt;td class=&quot;style5&quot;&gt;Brand Name &lt;/td&gt;<br>
&lt;td&gt;&lt;?php echo $s2 ?&gt;&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;&lt;span class=&quot;style5&quot;&gt;Price&lt;/span&gt;&lt;/td&gt;<br>
&lt;td&gt;&lt;?php echo $s3 ?&gt;&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;&lt;span class=&quot;style5&quot;&gt;Upload image &lt;/span&gt;&lt;/td&gt;<br>
&lt;td&gt;&lt;?php echo &quot;Image Uploaded...&quot; ?&gt;&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;tr&gt;<br>
&lt;td colspan=&quot;2&quot;&gt;&lt;div align=&quot;center&quot;&gt;<br>
&lt;?php<br>
include (&quot;connect.php&quot;);<br>
$Pid=&quot;2022000&quot;;<br>
$s=mysql_query(&quot;select * from products order by Pid desc&quot;);<br>
if($row=mysql_fetch_array($s))<br>
{<br>
$Pid=$row[0];<br>
}<br>
$Pid++;<br>
$filename=$_FILES['fname']['name'];<br>
$x=explode(&quot;.&quot;,$filename);<br>
$n=count($x);<br>
$n--;<br>
$ext=$x[$n];<br>
$filename=&quot;$Pid.$ext&quot;;<br>
move_uploaded_file($_FILES[&quot;fname&quot;][&quot;tmp_name&quot;],&quot;./Pimage/$filename&quot;);<br>
$s=&quot;insert into products values('$Pid','$s1','$s2','$s3','$filename')&quot;;<br>
mysql_query($s);<br>
echo&quot;&lt;b&gt; Add Product Successfully &lt;/br&gt;&quot; ;<br>
<br>
?&gt;
<p> &lt;/div&gt;&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;/table&gt;<br>
&lt;/form&gt;</p>

