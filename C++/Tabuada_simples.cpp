#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main(){
int i;
setlocale(LC_ALL, "Portuguese");
printf("\n Repetição-laço \n");
for(i=1;i<=10;i++){				
	printf("\n%ix%i=%i \n",2,i,2*i);	
	}
	printf("\n");
	system("pause");
}
