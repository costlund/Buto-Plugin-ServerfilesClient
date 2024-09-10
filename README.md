# Buto-Plugin-ServerfilesClient

<ul>
<li>Get, add, delete, list files from a file server using plugin serverfiles/server.</li>
</ul>

<a name="key_0"></a>

## Usage

<pre><code>wfPlugin::includeonce('serverfiles/client');
$client = new PluginServerfilesClient();</code></pre>
<pre><code>$data = new PluginWfArray();
$data-&gt;set('host', 'http://-my-file-server');
$data-&gt;set('folder', '/any_folder');</code></pre>
<p>Both host and folder must be set up properly on file server.
Check out readme for that plugin.
Param folder is relative to application root folder.</p>

<a name="key_1"></a>

## Methods



<a name="key_1_0"></a>

### get_file

<p>Set filename.</p>
<pre><code>$data-&gt;set('filename', 'test.jpg');</code></pre>
<pre><code>if(true){
  wfHelp::print($client-&gt;get_file($data-&gt;get()));
}else{
  $result = $client-&gt;get_file($data-&gt;get());
  if($result['file_exist']){
    header("Content-type: ".$result['content-type']);
    exit(base64_decode($result['content']));
  }else{
    exit('no file');
  }
}</code></pre>

<a name="key_1_1"></a>

### get_folder

<pre><code>wfHelp::print($client-&gt;get_folder($data-&gt;get()));</code></pre>

<a name="key_1_2"></a>

### set_file

<p>Get content and set filename.</p>
<pre><code>$content = wfFilesystem::getContents('/plugin/serverfiles/demo/test.jpg');
$data-&gt;set('filename', 'test.jpg');
$data-&gt;set('content', base64_encode($content));
wfHelp::print($client-&gt;set_file($data-&gt;get()));</code></pre>

<a name="key_1_3"></a>

### delete_file

<p>Set filename.</p>
<pre><code>$data-&gt;set('filename', 'test.jpg');</code></pre>
<pre><code>wfHelp::print($client-&gt;delete_file($data-&gt;get()));</code></pre>

