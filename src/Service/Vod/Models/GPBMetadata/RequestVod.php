<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class RequestVod
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad6160a1d766f642f726571756573742f726571756573745f766f642e70726f746f121d566f6c63656e67696e652e566f642e4d6f64656c732e526571756573741a1f766f642f627573696e6573732f766f645f776f726b666c6f772e70726f746f1a1d766f642f627573696e6573732f766f645f75706c6f61642e70726f746f22e9010a15566f64476574506c6179496e666f52657175657374120b0a03566964180120012809120e0a06466f726d6174180220012809120d0a05436f64656318032001280912120a0a446566696e6974696f6e18042001280912100a0846696c655479706518052001280912100a084c6f676f54797065180620012809120e0a06426173653634180720012809120b0a0353736c18082001280912120a0a4e6565645468756d627318092001280912170a0f4e656564426172726167654d61736b180a20012809120f0a0743646e54797065180b2001280912110a09556e696f6e496e666f180c2001280922490a1d566f644765744f726967696e616c506c6179496e666f52657175657374120b0a03566964180120012809120e0a06426173653634180220012809120b0a0353736c18032001280922670a1f566f644765745072697661746544726d506c61794175746852657175657374120f0a0744726d54797065180120012809120b0a0356696418022001280912130a0b506c61794175746849647318032001280912110a09556e696f6e496e666f18042001280922510a1d566f64476574486c7344656372797074696f6e4b65795265717565737412140a0c44726d41757468546f6b656e180120012809120a0a02416b180220012809120e0a06536f75726365180320012809226d0a13566f6455726c55706c6f61645265717565737412110a0953706163654e616d6518012001280912430a0755524c5365747318022003280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6455726c55706c6f616455524c536574222f0a1d566f64517565727955706c6f61645461736b496e666f52657175657374120e0a064a6f6249647318012001280922660a19566f644170706c7955706c6f6164496e666f5265717565737412110a0953706163654e616d6518012001280912120a0a53657373696f6e4b657918022001280912100a0846696c6553697a6518032001280112100a0846696c655479706518042001280922650a15566f6455706c6f61644d656469615265717565737412110a0953706163654e616d6518012001280912100a0846696c655061746818022001280912140a0c43616c6c6261636b4172677318032001280912110a0946756e6374696f6e73180420012809227a0a18566f6455706c6f61644d6174657269616c5265717565737412110a0953706163654e616d6518012001280912100a0846696c655061746818022001280912140a0c43616c6c6261636b4172677318032001280912110a0946756e6374696f6e7318042001280912100a0846696c6554797065180520012809226c0a1a566f64436f6d6d697455706c6f6164496e666f5265717565737412110a0953706163654e616d6518012001280912120a0a53657373696f6e4b657918022001280912140a0c43616c6c6261636b4172677318032001280912110a0946756e6374696f6e73180420012809223d0a17566f6455726c55706c6f61644a736f6e5265717565737412110a0953706163654e616d65180120012809120f0a0755524c53657473180220012809222e0a1e566f644765745265636f6d6d656e646564506f7374657252657175657374120c0a045669647318012001280922410a22566f645570646174654d656469615075626c69736853746174757352657175657374120b0a03566964180120012809120e0a0653746174757318022001280922e5010a19566f645570646174654d65646961496e666f52657175657374120b0a03566964180120012809122f0a09506f7374657255726918022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122b0a055469746c6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512310a0b4465736372697074696f6e18042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122a0a045461677318052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522270a17566f644765744d65646961496e666f7352657175657374120c0a0456696473180120012809223b0a15566f6444656c6574654d6564696152657175657374120c0a045669647318012001280912140a0c43616c6c6261636b4172677318022001280922500a1a566f6444656c6574655472616e73636f64657352657175657374120b0a03566964180120012809120f0a0746696c6549647318022001280912140a0c43616c6c6261636b4172677318032001280922ab010a16566f644765744d656469614c6973745265717565737412110a0953706163654e616d65180120012809120b0a03566964180220012809120e0a06537461747573180320012809120d0a054f72646572180420012809120c0a045461677318052001280912110a09537461727454696d65180620012809120f0a07456e6454696d65180720012809120e0a064f666673657418082001280912100a085061676553697a6518092001280922e6010a1d566f644765745375627469746c65496e666f4c69737452657175657374120b0a03566964180120012809120f0a0746696c6549647318022001280912110a094c616e677561676573180320012809120f0a07466f726d61747318042001280912130a0b4c616e677561676549647318052001280912130a0b5375627469746c65496473180620012809120e0a06537461747573180720012809120d0a055469746c65180820012809120b0a03546167180920012809120e0a064f6666736574180a2001280912100a085061676553697a65180b20012809120b0a0353736c180c2001280922720a1e566f645570646174655375627469746c6553746174757352657175657374120b0a03566964180120012809120f0a0746696c6549647318022001280912110a094c616e677561676573180320012809120f0a07466f726d617473180420012809120e0a0653746174757318052001280922b5010a1c566f645570646174655375627469746c65496e666f52657175657374120b0a03566964180120012809120e0a0646696c65496418022001280912100a084c616e6775616765180320012809120e0a06466f726d6174180420012809122b0a055469746c6518062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512290a0354616718072001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522a1010a17566f645374617274576f726b666c6f7752657175657374120b0a0356696418012001280912120a0a54656d706c6174654964180220012809123d0a05496e70757418032001280b322e2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e576f726b666c6f77506172616d7312100a085072696f7269747918042001280512140a0c43616c6c6261636b4172677318052001280942c8010a28636f6d2e766f6c63656e67696e652e736572766963652e766f642e6d6f64656c2e72657175657374420a566f645265717565737450015a406769746875622e636f6d2f766f6c63656e67696e652f766f6c632d73646b2d676f6c616e672f736572766963652f766f642f6d6f64656c732f72657175657374a00101d80101ca021f566f6c635c536572766963655c566f645c4d6f64656c735c52657175657374e20223566f6c635c536572766963655c566f645c4d6f64656c735c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
