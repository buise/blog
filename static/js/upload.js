/**
 * Created by Administrator on 2017/6/6.
 */
//white food
    class Upload{
        constructor(){
            this.type="image/jpeg,image/jpg,image/png,image/git";
            this.size=250*1024;
            this.listarr=[];

            // 样式设置
            this.constyle={width:400,border:"1px solid #e4e4e4"};
            this.selstyle={width:120,height:40,borderRadius:5,background:"red",color:"#fff",text:"选择文件"};
            this.uplstyle={width:120,height:40,borderRadius:5,background:"green",color:"#fff",text:"上传文件"};
            this.allListstyle={
                list:{
                    width:100,height:100,border:"1px solid #ccc",margin:5
                },
                img:{
                    width:"100%",height:"100%"
                },
                back:{

                }
            }
        }
        // 创建整个视图
        createView(obj={par:document.body}){
            this.createContainer(obj.con,obj.par,()=>{ //1、创建最外面的框架
                this.createSelect(obj.sel); //2、创建选择图片按钮
                this.createUpload(obj.up);  //3、创建上传图片按钮
                this.createPreview(obj.pre);//4、创建图片预览
            });
            // this.createList(obj.list);//5、创建图片列表
            this.uploading();
        }

        // 设置最外面框架
        createContainer(con,par,callback){
            if(con){
                this.con=con;
                return;
            }
            this.con=document.createElement("div");
            this.con.style.cssText="width:"+this.constyle.width+"px;border:"+this.constyle.border+";position:relative";
            par.appendChild(this.con);
            callback();
        }

        // 设置选择图片按钮
        createSelect(sel){
            if(sel){
                this.sel=sel;
                return;
            }
            let div=document.createElement("div");
            this.sel=document.createElement("input");
            let span=document.createElement("span");
            div.style.cssText="width:"+this.selstyle.width+"px;height:"+this.selstyle.height+"px;border-radius:"+this.selstyle.borderRadius+"px;background:"+this.selstyle.background+";color:"+this.selstyle.color+";position:relative;text-align:center;line-height:"+this.selstyle.height+"px;cursor:pointer";
            span.innerHTML=this.selstyle.text;
            this.sel.type="file";
            // this.sel.accept="image/*";
            this.sel.multiple="multiple";
            this.sel.style.cssText="width:100%;height:100%;opacity:0;position:absolute;left:0;top:0;";
            this.con.appendChild(div);
            div.appendChild(span);
            div.appendChild(this.sel);
        }

        // 设置上传图片按钮
        createUpload(upl){
            if(upl){
                this.upl=upl;
                return;
            }
            this.upl=document.createElement("div");
            let span=document.createElement("span");
            this.upl.style.cssText="width:"+this.uplstyle.width+"px;height:"+this.uplstyle.height+"px;border-radius:"+this.uplstyle.borderRadius+"px;background:"+this.uplstyle.background+";color:"+this.uplstyle.color+";text-align:center;line-height:"+this.uplstyle.height+"px;cursor:pointer";
            span.innerHTML=this.uplstyle.text;
            this.con.appendChild(this.upl);
            this.upl.appendChild(span);
        }

        // 设置预选框样式
        createPreview(pre){
            if(pre){
                this.pre=pre;
                return;
            }
            this.pre=document.createElement("div");
            this.pre.style.cssText="width:100%;height:auto;border:1px solid #ccc;overflow:hidden";
            this.con.insertBefore(this.pre,this.upl);
        }

        // 设置列表样式
        createList(list){
            if(list){
                this.list=list;
                return;
            }
            // 1、创建列表
            this.list=document.createElement("div");
            this.list.style.cssText="width:"+this.allListstyle.list.width+"px;height:"+this.allListstyle.list.height+"px;border:"+this.allListstyle.list.border+";position:relative;overflow:hidden;margin:"+this.allListstyle.list.margin+"px;float:left";
            this.pre.appendChild(this.list);
            // 2、创建图片
            let img=document.createElement("img");
            img.style.cssText="width:"+this.allListstyle.img.width+";height:"+this.allListstyle.img.height;
            this.list.appendChild(img);
            // 3、进度条
            let back=document.createElement("div");
            back.style.cssText="position:absolute;width:0%;height:12px;left:0;bottom:0;background:red;opacity:0.7;text-align:center;line-height:12px;font-size:12px;";
            this.list.appendChild(back);
            // 4、提示信息
            let mess=document.createElement("div");
            mess.style.cssText="position:absolute;width:70%;height:20px;left:0;right:0;top:0;bottom:0;margin:auto;background:#ff6709;display:none";
            this.list.appendChild(mess);
            // 5、删除按钮
            let del=document.createElement("div");
            let spans=document.createElement("span");
            del.style.cssText="position:absolute;width:20px;height:20px;right:5px;top:5px;background:red;border-radius:50%;color:#fff;text-align:center;line-height:16px;cursor:pointer;display:none";
            spans.innerHTML="-";
            del.appendChild(spans);
            this.list.appendChild(del);

            //删除图片
            this.list.onmouseover=function () {
                del.style.display='block';
            }
            this.list.onmouseout=function () {
                del.style.display='none';
            }
            del.onclick=function () {
                let par=this.parentNode;
                par.parentNode.removeChild(par);
            }

            return {
                Img:img,
                Mess:mess,
                Back:back,
                Del:del,
            };
        }


        // 文件上传
        uploading(){
            this.change();
        }

        change(){
            let that=this;
            this.sel.onchange=function () {
                that.data=Array.prototype.slice.call(this.files);
                that.check();
            };
        }

        check(){
            let temp=[];
            for (let i=0;i<this.data.length;i++){
                temp[i]=this.data[i];
            }
            for (let i=0;i<temp.length;i++){
                let obj=this.createList();
                let read=new FileReader();
                read.readAsDataURL(temp[i]);
                read.onload=function (e) {
                    obj.Img.src=e.target.result;
                }
                if(temp[i].size>this.size&&temp[i].type.indexOf(this.type)<0){
                    obj.Mess.style.display="block";
                    obj.Mess.innerHTML="文件出错";
                    for(let j=0;j<this.data.length;j++){
                        if(temp[i]==this.data[j]){
                            this.data.splice(j,1);
                        }
                    }
                }else{
                    this.listarr.push(obj);
                }
            }
            let that=this;
            for(let k=0;k<this.listarr.length;k++){
                that.listarr[k].Del.onclick=function () {
                    let par=this.parentNode;
                    par.parentNode.removeChild(par);
                    that.listarr.splice(k,1);
                };
            }
        }
    // 上传文件

        uping(url,callback){
            let that=this;
            this.upl.onclick=function () {
                if(!url){
                    alert("上传时需要一个地址");
                    return;
                }
                for(let i=0;i<that.listarr.length;i++){
                    let ajax=new XMLHttpRequest();
                    let formdata=new FormData();
                    formdata.append("file",that.data[i]);
                    ajax.onload=function () {
                        callback(ajax.response);
                    };
                    ajax.upload.onprogress=function (e) {
                        let percent=e.total/e.loaded*100+"%";
                        that.listarr[i].Back.innerHTML=percent;
                        that.listarr[i].Back.style.width=percent;
                    };
                    ajax.open("post",url);
                    ajax.send(formdata);
                }
            }
        }
    }
    // let obj=new Upload();
    // obj.createView();
    // obj.uping('onload.php');