#include<stdio.h>
#include<stdlib.h>
#include<windows.h>
#include<locale.h>
#include<string.h>
#include<time.h>
int main(){
 setlocale(LC_ALL,"portuguese");
	int letra;
	char vetn[40];
	printf("\n Informe seu lindo nome \n");
	gets(vetn);
	printf("\n a primeira letra do seu nome é: %c", vetn[0]);
	printf("\n a segunda letra do seu nome é: %c", vetn[1]);
	letra=strlen(vetn);
	printf("\n seu nome tem %i letras \n",letra);
	printf("\n a última letra do seu nome é = %c letras \n",vetn[letra-1]);
	int i;
	for(i=0;i<=letra-1;i++){
		printf("\n %c \n", vetn[i]);
	}
}
