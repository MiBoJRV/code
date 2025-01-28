import React from 'react';
import cn from 'classnames';
import { SaasBannerType } from 'src/types';
import { ArrowIcon, HelpIcon } from 'src/assets/icons';
import { PageSection, Heading2, Text1, Button, IconButton } from 'src/ui-kit';

export const SaasMainBanner: React.FC<SaasBannerType> = ({
  title,
  description,
  buttonText,
  buttonClassName = '',
  images,
}): JSX.Element => (
  <PageSection paddingTop="pt-0" paddingTopLg="lg:pt-0" className="relative">
    <div>
      <div className="flex flex-col justify-center mx-auto text-center max-w-full my-12">
        <Heading2>{title}</Heading2>
        <Text1
          fontSize="text-x2-mob"
          className="mt-8 max-w-[613px] mx-auto sm:w-auto"
        >
          {description}
        </Text1>
      </div>
      <div className="w-[100%] lg:max-w-[1004px] mx-auto ">
        <div className="relative pb-[60%] lg:pb-[534px]">
          {images.map(({ id, image, alt, className }) => (
            <img
              key={id}
              srcSet={image?.srcSet ?? ''}
              src={image?.src ?? ''}
              {...{ alt, className }}
            />
          ))}
        </div>
      </div>
      <div className="flex justify-center mt-11 lg:mt-[60px]">
        <Button
          btnKind="lg"
          title={buttonText}
          icon={<ArrowIcon />}
          iconPosition="right"
          className={cn('w-full justify-center', buttonClassName)}
        />
      </div>
    </div>
    <div className="fixed top-[80%] right-8 lg:hidden z-[1]">
      <IconButton icon={<HelpIcon />} btnKind="xl" className="ml-auto" />
    </div>
  </PageSection>
);
