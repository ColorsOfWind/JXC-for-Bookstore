	function createsubmit() {

		if(!(verifylength("create-goodName",1,20)&&verifylength("create-goodAlias",1,20)&&verifylength("create-goodMnemonniccode",1,20)&&verifylength("create-goodPinyin",1,20)&&verifylength("create-goodManufacture",1,20)&&verifylength("create-goodPrice",1,20))) { 
			return false;
		}

		var supName = $("#create-supName").val();
		var supArea = $("#create-supArea").val();
		var supPinyin = $("#create-supPinyin").val();
		var supBrief = $("#create-supBrief").val();
		var supTel = $("#create-supTel").val();
		var supContact = $("#create-supContact").val();
		var supFax = $("#create-supFax").val();
		var supPostcode = $("#create-supPostcode").val();
		var supAddress = $("#create-supAddress").val();
		var supBank = $("#create-supBank").val();
		var supBankAccount = $("#create-supBankAccount").val();
		var supEmail = $("#create-supEmail").val();
		var supBankAccount = $("#create-supBankAccount").val();
		var supInternet = $("#create-supInternet").val();
		var supNote = $("#create-supNote").val();
		$.ajax( {  
	        url:'/c_suppliers/addGood',// 跳转到 action  
	        data:{  
	        	'supName': supName,
	        	'supArea': supArea,
	        	'supPinyin': supPinyin,
	        	'supBrief': supBrief,
	        	'supTel': supTel,
	        	'supContact': supContact,
	        	'supFax': supFax,
	        	'supPostcode': supPostcode,
	        	'supAddress': supAddress,
	        	'supBank': supBank,
	        	'supBankAccount': supBankAccount,
	        	'supEmail': supEmail,
	        	'supBankAccount': supBankAccount,
	        	'supInternet': supInternet,
	        	'supNote': supNote,
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-create').modal("hide");
	        		$('#modal-prompt-content').text("新增供应商成功");
	        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
	        		$('#modal-prompt').modal('show');
	        	}
	        	else {
	        		document.getElementById("create-supName-p").innerHTML="商品已存在";
	        		document.getElementById("create-supName-div").className="has-error form-group";
	        	}
	        },
	        error : function() {
	        	$('#modal-create').modal("hide");
	        	$('#modal-prompt-content').text("创建出现错误，请联系管理员或尝试重新登录");
	        	document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
	        	$('#modal-prompt').modal('show');
	        }  
    	});
	}