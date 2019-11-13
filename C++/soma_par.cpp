#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main(){
int i,soma=0;
setlocale(LC_ALL, "Portuguese");
printf("\n Soma Par \n");
for(i=1;i<=10;i++){	
	if(i%2==0)			
	soma=soma+i;	
	}
	printf("\n O resultado da soma = %i \n",soma);
	system("pause");
}
