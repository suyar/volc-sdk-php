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
            "0ae7280a1d766f642f726571756573742f726571756573745f766f642e70726f746f121d566f6c63656e67696e652e566f642e4d6f64656c732e526571756573741a1f766f642f627573696e6573732f766f645f776f726b666c6f772e70726f746f1a1d766f642f627573696e6573732f766f645f75706c6f61642e70726f746f2293020a15566f64476574506c6179496e666f52657175657374120b0a03566964180120012809120e0a06466f726d6174180220012809120d0a05436f64656318032001280912120a0a446566696e6974696f6e18042001280912100a0846696c655479706518052001280912100a084c6f676f54797065180620012809120e0a06426173653634180720012809120b0a0353736c18082001280912120a0a4e6565645468756d627318092001280912170a0f4e656564426172726167654d61736b180a20012809120f0a0743646e54797065180b2001280912110a09556e696f6e496e666f180c2001280912150a0d484452446566696e6974696f6e180d2001280912110a09506c61795363656e65180e2001280922490a1d566f644765744f726967696e616c506c6179496e666f52657175657374120b0a03566964180120012809120e0a06426173653634180220012809120b0a0353736c18032001280922670a1f566f644765745072697661746544726d506c61794175746852657175657374120f0a0744726d54797065180120012809120b0a0356696418022001280912130a0b506c61794175746849647318032001280912110a09556e696f6e496e666f18042001280922510a1d566f64476574486c7344656372797074696f6e4b65795265717565737412140a0c44726d41757468546f6b656e180120012809120a0a02416b180220012809120e0a06536f757263651803200128092298010a2b566f64476574506c6179496e666f576974684c69766554696d6553686966745363656e655265717565737412110a0953746f72655572697318012001280912110a0953706163654e616d65180220012809120b0a0353736c18032001280912170a0f45787069726554696d657374616d70180420012809121d0a154e656564436f6d706f73654275636b65744e616d65180520012809226d0a13566f6455726c55706c6f61645265717565737412110a0953706163654e616d6518012001280912430a0755524c5365747318022003280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6455726c55706c6f616455524c536574222f0a1d566f64517565727955706c6f61645461736b496e666f52657175657374120e0a064a6f6249647318012001280922780a19566f644170706c7955706c6f6164496e666f5265717565737412110a0953706163654e616d6518012001280912120a0a53657373696f6e4b657918022001280912100a0846696c6553697a6518032001280112100a0846696c655479706518042001280912100a0846696c654e616d6518052001280922770a15566f6455706c6f61644d656469615265717565737412110a0953706163654e616d6518012001280912100a0846696c655061746818022001280912140a0c43616c6c6261636b4172677318032001280912110a0946756e6374696f6e7318042001280912100a0846696c654e616d65180520012809228c010a18566f6455706c6f61644d6174657269616c5265717565737412110a0953706163654e616d6518012001280912100a0846696c655061746818022001280912140a0c43616c6c6261636b4172677318032001280912110a0946756e6374696f6e7318042001280912100a0846696c655479706518052001280912100a0846696c654e616d65180620012809226c0a1a566f64436f6d6d697455706c6f6164496e666f5265717565737412110a0953706163654e616d6518012001280912120a0a53657373696f6e4b657918022001280912140a0c43616c6c6261636b4172677318032001280912110a0946756e6374696f6e73180420012809223d0a17566f6455726c55706c6f61644a736f6e5265717565737412110a0953706163654e616d65180120012809120f0a0755524c53657473180220012809222e0a1e566f644765745265636f6d6d656e646564506f7374657252657175657374120c0a045669647318012001280922410a22566f645570646174654d656469615075626c69736853746174757352657175657374120b0a03566964180120012809120e0a06537461747573180220012809229c020a19566f645570646174654d65646961496e666f52657175657374120b0a03566964180120012809122f0a09506f7374657255726918022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122b0a055469746c6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512310a0b4465736372697074696f6e18042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122a0a045461677318052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512350a10436c617373696669636174696f6e496418062001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756522270a17566f644765744d65646961496e666f7352657175657374120c0a0456696473180120012809223b0a15566f6444656c6574654d6564696152657175657374120c0a045669647318012001280912140a0c43616c6c6261636b4172677318022001280922500a1a566f6444656c6574655472616e73636f64657352657175657374120b0a03566964180120012809120f0a0746696c6549647318022001280912140a0c43616c6c6261636b4172677318032001280922c6010a16566f644765744d656469614c6973745265717565737412110a0953706163654e616d65180120012809120b0a03566964180220012809120e0a06537461747573180320012809120d0a054f72646572180420012809120c0a045461677318052001280912110a09537461727454696d65180620012809120f0a07456e6454696d65180720012809120e0a064f666673657418082001280912100a085061676553697a6518092001280912190a11436c617373696669636174696f6e496473180a2001280922e6010a1d566f644765745375627469746c65496e666f4c69737452657175657374120b0a03566964180120012809120f0a0746696c6549647318022001280912110a094c616e677561676573180320012809120f0a07466f726d61747318042001280912130a0b4c616e677561676549647318052001280912130a0b5375627469746c65496473180620012809120e0a06537461747573180720012809120d0a055469746c65180820012809120b0a03546167180920012809120e0a064f6666736574180a2001280912100a085061676553697a65180b20012809120b0a0353736c180c2001280922720a1e566f645570646174655375627469746c6553746174757352657175657374120b0a03566964180120012809120f0a0746696c6549647318022001280912110a094c616e677561676573180320012809120f0a07466f726d617473180420012809120e0a0653746174757318052001280922b5010a1c566f645570646174655375627469746c65496e666f52657175657374120b0a03566964180120012809120e0a0646696c65496418022001280912100a084c616e6775616765180320012809120e0a06466f726d6174180420012809122b0a055469746c6518062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512290a0354616718072001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522710a23566f64437265617465566964656f436c617373696669636174696f6e5265717565737412110a0953706163654e616d65180120012809120d0a054c6576656c18022001280512100a08506172656e74496418032001280312160a0e436c617373696669636174696f6e180420012809226a0a23566f64557064617465566964656f436c617373696669636174696f6e5265717565737412110a0953706163654e616d6518012001280912180a10436c617373696669636174696f6e496418022001280312160a0e436c617373696669636174696f6e18032001280922520a23566f6444656c657465566964656f436c617373696669636174696f6e5265717565737412110a0953706163654e616d6518012001280912180a10436c617373696669636174696f6e496418022001280322510a22566f644c697374566964656f436c617373696669636174696f6e735265717565737412110a0953706163654e616d6518012001280912180a10436c617373696669636174696f6e496418022001280322770a20566f6447657441756469744672616d6573466f72417564697452657175657374120b0a0356696418012001280912100a08537472617465677918022001280912190a114d696e4e756d6265724f664672616d657318032001280912190a114d61784e756d6265724f664672616d657318042001280922a1020a1d566f644765744d4c4672616d6573466f72417564697452657175657374120b0a0356696418012001280912100a08537472617465677918022001280912100a084672616d654f707418032001280912100a084672616d6546707318042001280912160a0e4e756d6265724f664672616d657318052001280912140a0c43757454696d654d696c6c7318062001280912160a0e4e65656446697273744672616d6518072001280912150a0d4e6565644c6173744672616d6518082001280912150a0d537461727454696d654d696c6c18092001280912130a0b456e6454696d654d696c6c180a2001280912190a114d696e4e756d6265724f664672616d6573180b2001280912190a114d61784e756d6265724f664672616d6573180c2001280922550a21566f644765744265747465724672616d6573466f72417564697452657175657374120b0a0356696418012001280912100a08537472617465677918022001280912110a09436f76657252617465180320012809223f0a1e566f64476574417564696f496e666f466f72417564697452657175657374120b0a0356696418012001280912100a08537472617465677918022001280922500a2f566f644765744175746f6d617469635370656563685265636f676e6974696f6e466f72417564697452657175657374120b0a0356696418012001280912100a08537472617465677918022001280922490a28566f64476574417564696f4576656e74446574656374696f6e466f72417564697452657175657374120b0a0356696418012001280912100a08537472617465677918022001280922260a17566f644c697374536e617073686f747352657175657374120b0a0356696418012001280922bc010a17566f645374617274576f726b666c6f7752657175657374120b0a0356696418012001280912120a0a54656d706c6174654964180220012809123d0a05496e70757418032001280b322e2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e576f726b666c6f77506172616d7312100a085072696f7269747918042001280512140a0c43616c6c6261636b4172677318052001280912190a11456e61626c654c6f775072696f7269747918062001280822760a15566f6443726561746553706163655265717565737412110a0953706163654e616d6518012001280912130a0b50726f6a6563744e616d6518022001280912130a0b4465736372697074696f6e180320012809120e0a06526567696f6e18042001280912100a08557365724e616d65180520012809222d0a18566f64476574537061636544657461696c5265717565737412110a0953706163654e616d6518012001280922340a13566f644c697374537061636552657175657374120e0a064f6666736574180120012801120d0a054c696d6974180220012801222d0a18566f644765745370616365436f6e6669675265717565737412110a0953706163654e616d6518012001280922750a15566f6455706461746553706163655265717565737412110a0953706163654e616d6518012001280912190a11536f7572636550726f6a6563744e616d6518022001280912190a1154617267657450726f6a6563744e616d6518032001280912130a0b4465736372697074696f6e180420012809225e0a21566f64557064617465537061636555706c6f6164436f6e6669675265717565737412110a0953706163654e616d6518012001280912110a09436f6e6669674b657918022001280912130a0b436f6e66696756616c756518032001280922290a14566f644c697374446f6d61696e5265717565737412110a0953706163654e616d65180120012809224f0a1e566f6443726561746543646e526566726573685461736b5265717565737412110a0953706163654e616d65180120012809120c0a0455726c73180220012809120c0a045479706518032001280922410a1e566f6443726561746543646e5072656c6f61645461736b5265717565737412110a0953706163654e616d65180120012809120c0a0455726c7318022001280922430a21566f6441646443616c6c6261636b537562736372697074696f6e5265717565737412110a0953706163654e616d65180120012809120b0a0355726c180220012809223f0a1a566f6453657443616c6c6261636b4576656e745265717565737412110a0953706163654e616d65180120012809120e0a064576656e747318022001280942c8010a28636f6d2e766f6c63656e67696e652e736572766963652e766f642e6d6f64656c2e72657175657374420a566f645265717565737450015a406769746875622e636f6d2f766f6c63656e67696e652f766f6c632d73646b2d676f6c616e672f736572766963652f766f642f6d6f64656c732f72657175657374a00101d80101ca021f566f6c635c536572766963655c566f645c4d6f64656c735c52657175657374e20223566f6c635c536572766963655c566f645c4d6f64656c735c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

