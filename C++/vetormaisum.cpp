#include<stdio.h>
#include<stdlib.h>
#include<windows.h>
#include<locale.h>
#include<string.h>
	int main(){
		setlocale(LC_ALL,"portuguese");
	int entrada,i,vetp[10];
		for(i=0;i<=9;i++){
		fflush(stdin);
			printf("\n Informe o %i n�mero par \n",i+1);
				scanf("%i",&entrada);
					while(entrada%2!=0){
			printf("\n Informe o %i n�mero par \n",i+1);
				scanf("%i",&entrada);
					}
						vetp[i]=entrada;
		 				 }
		 	printf("\n Voc� armazenou 10 n�meros �mpares \n");
		for(i=0;i<=9;i++){
			printf("\n %i \n",vetp[i]);
		}
		 	
			 }
