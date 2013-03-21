<html>
<head>
<script src="json2.js"></script>
<script>
window.get=function (urlc, callabck) {
	window.urlc = urlc;
	urla = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc)+'&full_headers=1';
	var getx = new XMLHttpRequest();
	getx.open('get', urla, true);
 	getx.onreadystatechange = function() {
		if (getx.readyState==4) {
			var datad = getx.responseText;
			var datap = JSON.parse(datad);
			//var datadp = parseh(datap.contents);
			document.getElementById('url').value = urlc;
			window.parsedata = HTMLParser.parse(datap.contents);
			window.dom = parsedata;
			// Set some rendering options:
			var rend = document.getElementById('paste');
			var insp = document.getElementById('paste2');
			//insp.innerHTML = prettySource(dom);
  		      	var opt = {
  		          // render in a different document:
 		           document : document,
 		           
 		           // Only render these HTML elements:
 		           whitelist : 'a b i em strong span p ul ol li dd dt table tbody thead tfoot tr td th img div input textarea button form fieldset label pre code section caption head foot html xml body head link style meta title iframe'.split(' ')
 		       };
        
   		     
  		      HTMLRenderer.render(
  		          dom.childNodes[0].childNodes,
 		           opt.document.body,
 		           opt
 		       );
 		       // Render <head> into <head>:
  		      HTMLRenderer.render(
  		          dom.childNodes[0].childNodes[0].childNodes,
  		          opt.document.getElementsByTagName('head')[0],
  		          opt
  		      );
        
   		     // Render <body> into <body>:
     		   HTMLRenderer.render(
    		        dom.childNodes[0].childNodes[1].childNodes,
    		        opt.document.body,
     		       opt
    		    );
			window.data=datap;
			//window.data2=datap2;
			window.parseh();
		};
	};
	getx.send();
};
window.addEventListener('keypress', function(event) {
if (event.target==document.getElementById('url')) {
	if (event.keyCode==13) {
		get(document.getElementById('url').value);
	};
};
}, true);
</script>
<script>
var HTMLRenderer = {
    /** @lends HTMLRenderer */
    
    /** Render a DOM Node or document into a node.
     *  @param n      A Node or Document
     *  @param into   A node to append the constructed elements to
     *  @returns {HTMLElement}
     */
    render : function node(n, into, options) {
        var i, d;
        options = options || {};
        //console.log('node(',n,',',into,')');
        if (!n) { return false; }
        if (Object.prototype.toString.call(n)==='[object Array]') {
            for (i=0; i<n.length; i++) {
                node(n[i], into, options);
            }
        }
        else if (n.nodeName==='#document') {
            node(n.childNodes, into, options);
        }
        else {
            if (n.nodeType===3) {
                d = document.createTextNode(n.textContent);
            }
            else if (n.nodeType===4) {
                d = document.createComment(' <![CDATA['+n.textContent+']]> ');
            }
            else if (n.nodeType===8) {
                d = document.createComment(n.textContent);
            }
            else {
                if (options.blacklist && options.blacklist.indexOf(n.nodeName)>-1) {
                    return false;
                }
                if (options.whitelist && options.whitelist.indexOf(n.nodeName)===-1) {
                    return false;
                }
                d = (options.document || document).createElement(n.nodeName);
                for (i in n.attributes) {
                    if (n.attributes.hasOwnProperty(i)) {
                        d.setAttribute(i, n.attributes[i]);
                    }
                }
                if (n.childNodes && n.childNodes.length>0) {
                    node(n.childNodes, d, options);
                }
                else {
                    d.innerHTML = n.innerHTML;
                }
            }
            into.appendChild(d);
        }
        return d;
    }
};

function parseh() {
	var atag = document.getElementsByTagName('a');
	for (var i=0; i<atag.length; i++) {
		var hrefa = atag[i].href;
		atag[i].href = 'javascript:get("'+urlc+hrefa.substr(14)+'");';
	};
	var imgtag = document.getElementsByTagName('img');
	for (var i=0; i<imgtag.length; i++) {
		if (imgtag[i].src.substr(0,7)=='http://') {
		} else if (imgtag[i].src.substr(0,7)==='http://') {
			var srcimg = imgtag[i].src;
			imgtag[i].src = urlc+hrefa.substr(14);
		};
	};
};
var HTMLParser = (function() {
        /** @exports exports as HTMLParser# */
    var exports = {},
        util = {},
        splitAttrsTokenizer = /([a-z0-9_\:\-]*)\s*?=\s*?(['"]?)(.*?)\2\s+/gim,
        domParserTokenizer = /(?:<(\/?)([a-zA-Z][a-zA-Z0-9\:]*)(?:\s([^>]*?))?((?:\s*\/)?)>|(<\!\-\-)([\s\S]*?)(\-\->)|(<\!\[CDATA\[)([\s\S]*?)(\]\]>))/gm, // [^]
        splitAttrs;
    
    util.extend = function(a, b) {
        for (var x in b) {
            if (b.hasOwnProperty(x)) {
                a[x] = b[x];
            }
        }
        return a;
    };
    
    util.inherit = function(a, b) {
        var p = a.prototype;
        function F(){}
        F.prototype = b.prototype;
        a.prototype = new F();
        util.extend(a.prototype, p);
        a.prototype.constructor = a;
    };
    
    util.selfClosingTags = {img:1,br:1,hr:1,meta:1,link:1,base:1,input:1};
    
    util.getElementsByTagName = function(el, tag) {
        var els=[], c=0, i, n, j;
        if (!tag) {
            tag = '*';
        }
        tag = tag.toLowerCase();
        if (el.childNodes) {
            for (i=0; i<el.childNodes.length; i++) {
                n = el.childNodes[i];
                if (n.nodeType===1 && (tag==='*' || n.nodeName===tag)) {
                    els[c++] = n;
                }
                Array.prototype.splice.apply(els, [els.length, 0].concat(util.getElementsByTagName(n, tag)));
                c = els.length;
            }
        }
        return els;
    };
    
    util.splitAttrs = function(str) {
        var obj={}, token;
        if (str) {
            splitAttrsTokenizer.lastIndex = 0;
            str = ' '+(str || '')+' ';
            while (token=splitAttrsTokenizer.exec(str)) {
                obj[token[1]] = util.decodeEntities(token[3]);
            }
        }
        return obj;
    };
    
    util.ta = document.createElement('textarea');
    util.encodeEntities = function(str) {
        util.ta.value = str || '';
        return util.ta.inner
        ;
    };
    util.decodeEntities = function(str) {
        util.ta.innerHTML = str || '';
        return util.ta.value;
    };
    
    util.htmlToText = function(html) {
        html = html.replace(/<\/?[a-z].*?>/gim, '');
        return util.decodeEntities(html);
    };
    
    function HTMLElement() {
        this.childNodes = [];
    };
    util.extend(HTMLElement.prototype, {
        nodeType : 1,
        textContent : '',
        getElementsByTagName : function(tag) {
            return util.getElementsByTagName(this, tag);
        },
        getAttribute : function(a) {
            if (this.attributes.hasOwnProperty(a)) {
                return this.attributes[a];
            }
        },
        setAttribute : function(name, value) {
            var lcName = (name+'').toLowerCase();
            this.attributes[name] = value + '';
            if (lcName==='id' || lcName==='name') {
                this[lcName] = value;
            }
            if (lcName==='class') {
                this.className = value;
            }
        },
        getElementById : function(id) {
            var all = this.getElementsByTagName('*'),
                i;
            for (i=all.length; i--; ) {
                if (all[i].id===id) {
                    return all[i];
                }
            }
        }
    });
    exports.HTMLElement = HTMLElement;
    
    function Node(){}
    util.extend(Node.prototype, {
        toString : function(){ return this.textContent; }
    });
    
    function TextNode(){}
    util.inherit(TextNode, Node);
    util.extend(TextNode.prototype, {
        nodeType : 3,
        nodeName : '#text'
    });
    exports.TextNode = TextNode;
    
    function CommentNode(){}
    util.inherit(CommentNode, Node);
    util.extend(CommentNode.prototype, {
        nodeType : 8,
        nodeName : '#comment'
    });
    exports.CommentNode = CommentNode;
    
    function CDATASectionNode(){}
    util.inherit(CDATASectionNode, Node);
    util.extend(CDATASectionNode.prototype, {
        nodeType : 4,
        nodeName : '#cdata-section'
    });
    exports.CDATASectionNode = CDATASectionNode;
    
    
    util.blockConstructors = {
        '<!--'      : CommentNode,
        '<![CDATA[' : CDATASectionNode
    };
    
    
    /** Parse a string of HTML into an HTML DOM.
     *  @param {String} str        A string containing HTML
     *  @returns {Document}        A Node, the type corresponding to the type of the root HTML node.
     */
    exports.parse = function(str) {
        var tags, doc, parent, prev, content, token, text, i, 
            bStart, bText, bEnd, BlockConstructor, commitTextNode, tag;
        tags = [];
        domParserTokenizer.lastIndex = 0;
        
        parent = doc = util.extend(new HTMLElement(), {
            nodeType : 9,
            nodeName : '#document'
        });
        
        commitTextNode = function() {
            // note: this is moved out of the loop but still uses its scope!!
            if (parent && tags.length>0) {
                prev = tags[tags.length-1];
                i = (prev.documentPosition.closeTag || prev.documentPosition.openTag).end;
                if (prev.parentNode===parent && i && i<tag.documentPosition.openTag.start) {
                    text = str.substring(i, tag.documentPosition.openTag.start);
                    if (text) {
                        text = util.decodeEntities(text);
                        parent.childNodes.push(util.extend(new TextNode(), {
                            textContent : text,
                            nodeValue : text,
                            parentNode : parent
                        }));
                    }
                }
            }
        };
        
        while (token=domParserTokenizer.exec(str)) {
            //console.log(token);
            bStart = token[5] || token[8];
            bText = token[6] || token[9];
            bEnd = token[7] || token[10];
            if (bStart==='<!--' || bStart==='<![CDATA[') {
                i = domParserTokenizer.lastIndex - token[0].length;
                BlockConstructor = util.blockConstructors[bStart];
                if (BlockConstructor) {
                    tag = util.extend(new BlockConstructor(), {
                        textContent : bText,
                        nodeValue : bText,
                        parentNode : parent,
                        documentPosition : {
                            openTag : {
                                start : i,
                                end : i+bStart.length
                            },
                            closeTag : {
                                start : domParserTokenizer.lastIndex - bEnd.length,
                                end : domParserTokenizer.lastIndex
                            }
                        }
                    });
                    commitTextNode();
                    tags.push(tag);
                    tag.parentNode.childNodes.push(tag);
                }
            }
            else if (token[1]!=='/') {
                tag = util.extend(new HTMLElement(), {
                    nodeName : (token[2]+'').toLowerCase(),
                    attributes : util.splitAttrs(token[3]),
                    parentNode : parent,
                    documentPosition : {
                        openTag : {
                            start : domParserTokenizer.lastIndex - token[0].length,
                            end : domParserTokenizer.lastIndex
                        }
                    }
                });
                tag.className = tag.attributes['class'];
                tag.id = tag.attributes['id'];
                tag.name = tag.attributes['name'];
                commitTextNode();
                tags.push(tag);
                tag.parentNode.childNodes.push(tag);
                if ((token[4] && token[4].indexOf('/')>-1) || util.selfClosingTags.hasOwnProperty(tag.nodeName)) {
                    tag.documentPosition.closeTag = tag.documentPosition.openTag;
                    tag.isSelfClosingTag = true;
                    tag.innerHTML = '';
                    tag.outerHTML = str.substring(tag.documentPosition.openTag.start, tag.documentPosition.closeTag.end);
                }
                else {
                    parent = tag;
                }
            }
            else {
                // Close parent node if end-tag matches
                if ((token[2]+'').toLowerCase()===parent.nodeName) {
                    tag = parent;
                    parent = tag.parentNode;
                    //parent = parent.parentNode;
                    //tag = tags.pop();
                    delete tag.isSelfClosingTag;
                    tag.documentPosition.closeTag = {
                        start : domParserTokenizer.lastIndex - token[0].length,
                        end : domParserTokenizer.lastIndex
                    };
                    tag.innerHTML = str.substring(tag.documentPosition.openTag.end, tag.documentPosition.closeTag.start);
                    tag.outerHTML = str.substring(tag.documentPosition.openTag.start, tag.documentPosition.closeTag.end);
                    tag.textContent = util.htmlToText(tag.innerHTML);
                }
                // account for abuse of self-closing tags when an end-tag is also provided:
                else if ((token[2]+'').toLowerCase()===tags[tags.length-1].nodeName && tags[tags.length-1].isSelfClosingTag===true) {
                    tag = tags[tags.length-1];
                    console.warn('HTML Error: discarding dangling <\/'+token[2]+'> tag. Already closed via: '+tag.outerHTML);
                    delete tag.isSelfClosing;
                    tag.documentPosition.closeTag = {
                        start : domParserTokenizer.lastIndex - token[0].length,
                        end : domParserTokenizer.lastIndex
                    };
                }
                else {
                    console.warn('tag mismatch: "'+token[2]+'" vs "'+tag.nodeName+'"', tag);
                }
            }
        }
        
        /*
        for (i=doc.childNodes.length; i--; ) {
            if (doc.childNodes[i].nodeName==='html') {
                doc = doc.childNodes[i];
                break;
            }
        }
        */
        
        doc.documentElement = doc.getElementsByTagName('html')[0];
        doc.body = doc.getElementsByTagName('body')[0];
        
        return doc;
    };
    
    return exports;
}());
function prettySource(obj) {
    var maxDepth = -1,
        depth = 0,
        root = true,
        sp = "    ",
        hits = [],
        hitCount = 0,
        dig,
        expander;
    
    expander = 'var s=this,i,o,c=0;while((s=s.nextSibling) && (++c)<3){if(s.nodeType===1 && s.getAttribute("i")==="i"){i=s;break;}}if(i){s=i.getAttribute("c");o=i.innerText || i.textContent || i.nodeValue;if(s){i.innerHTML=s;s="";}else if(o.length>20){s=i.innerHTML;i.innerHTML=o[0]+" ... "+o[o.length-1];}i.setAttribute("c",s);return false;}';
    // s.display=(s.display==="none"?"inline":"none");
    
    function objProp (prop) {
        var t = (typeof(prop)+"").toLowerCase();
        if (prop===null) {
            return "<span style='color:#A6BE88; font-style:italic;'>null</span>,\n";
        }
        else if (prop===undefined) {
            return "<span style='color:#BBB; font-style:italic;'>undefined</span>,\n";
        }
        else if (t==="function") {
            return "<span style='color:#0A0;'>" + (prop+"").replace("<","&lt;").replace(">","&gt;").replace(/function\s?\(/,"function <strong>"+((prop.constructor&&prop.constructor.name)||prop.name||"")+"</strong>(").replace(/\n/gim,'\n    ') + "</span>,\n";
        }
        else if (t==="string") {
            return "<span i='i' style='color:#D0D;'>\"" + prop.replace(/</gim,'&lt;').replace(/>/gim,'&gt;') + "\"</span>,\n";
        }
        else if (t==="number") {
            return "<span style='color:#F00;'>" + prop + "</span>,\n";
        }
        else if (t==="boolean") {
            return "<span style='color:#00D;'>" + (prop===true?"true":"false") + "</span>,\n";
        }
        else if (typeof(prop)==='object' || Object.prototype.toString.apply(prop)==="[object Array]") {
            return branch(prop).replace(/\n/gim,'\n'+sp) + ",\n";
        }
        return (prop.toSource || prop.toString)().replace(/^\((new\s)?(.+)\)$/,'$2') + ",\n";
    }
    function branch (what) {
        var wasRoot=root===true, x, dig, text="", m=0, i;
        root = false;
        for (i=hits.length; i--; ) {
            if (hits[i]===what) {
                return "<span style='color:#BBB; font-style:italic;'>[Recursion]</span>";
                break;
            }
        }
        hits[hitCount++] = what;
        if (maxDepth>0 && depth>maxDepth) {
            return "<span style='color:#BBB; font-style:italic;'>[Maximum Depth Reached]</span>";
        }
        depth++;
        if (Object.prototype.toString.apply(what)==="[object Array]") {
            text = "<pre i='i' style='color:#555; display:"+(wasRoot===false?"inline":"block")+"; margin:0; padding:0;'><strong>[</strong><span>\n";
            for (x=0; x<what.length; x++) {
                dig = (x+"# ").length;
                text += sp.substring(0,4-dig) + "<span style='color:#ABC; font-style:italic;'>#" + x + "</span> " + objProp(what[x]);
            }
            return text.replace(/\,\n$/,'\n') + "</span><strong>]</strong></pre>";
        }
        //else if (Object.prototype.toString.apply(what)==="[object Object]") {
        else if (typeof(what)==="object") {
            text = "<pre i='i' style='color:#555; display:"+(wasRoot===false?"inline":"block")+"; margin:0; padding:0;'><strong>{</strong>\n";
            for (x in what) {
                if (what.hasOwnProperty(x)) {
                    m = Math.max(m,(x+"").length);
                }
            }
            m += 1;
            for (x in what) {
                try {
                    if (what.hasOwnProperty(x)) {
                        text += sp + '<span onclick="'+expander.replace(/"/gm,'&quot;')+'" style="cursor:pointer; color:#089;">' + x + "</span>"+(new Array(m-(x+"").length).join(" "))+" : " + objProp(what[x]);
                    }
                }catch(err){
                    text += sp + "<span style='color:#089;'>" + x + "</span>"+(new Array(m-(x+"").length).join(" "))+" : <i>[access restriction]</i>";
                }
            }
            return text.replace(/\,\n$/,'\n') + "<strong>}</strong></pre>";
        }
    }
    var r = branch(obj);
    sp = root = branch = objProp = null;
    return r;
}
</script>
</head>
<body>
<input id="url" type="url" />
<div id="paste"></div>
<div id="paste2"></div>
</body>
</html>