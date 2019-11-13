#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main(){
int i,soma;
setlocale(LC_ALL, "Portuguese");
printf("\n Pares \n");
for(i=1;i<=100;i++){
if(i%2==0){		
	printf("\n %i \n",i);
	soma=soma+i;
			}
	Sleep(500);			
		}
system("pause");
}
