#include<stdio.h>
#include<stdlib.h>
#include<windows.h>
#include<locale.h>
int main(){
setlocale(LC_ALL, "portuguese");
float media, n1,n2;
printf("\n \t \a ::PROGRAMA SE APROVADO OU REPROVADO ::\n");
printf("\n informe a primeira nota = ");
scanf("%f",&n1);
printf("\n informe a segunda nota = ");
scanf("%f",&n2);
media=(n1+n2)/2;
printf("\n M�dia =%.2f",media);
if(media>=7){
	printf("\n Voc� est� aprovado (+_+) !!\n");
}
else{
	if(media<=5){
	printf("\n Voc� est� Reprovado (X_X) \n");
}
else{
	printf("\n Voc� est� de Recupera��o  (=_=) \n");
}
}
system("pause");
}
