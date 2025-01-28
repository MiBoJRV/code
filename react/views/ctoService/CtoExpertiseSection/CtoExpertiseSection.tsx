import React from 'react';
import cn from 'classnames';
import { CtoExpertiseType } from 'src/types';
import { CtoExpertiseListItem } from 'src/components';
import { Button, Heading2, PageSection, Text1 } from 'src/ui-kit';
import { ArrowIcon } from 'src/assets/icons';

export const CtoExpertiseSection: React.FC<CtoExpertiseType> = ({
  title,
  description,
  features,
  buttonText,
  buttonClassName,
}): JSX.Element => (
  <PageSection>
    <Heading2
      title={title}
      className="mb-5 mx-auto text-center max-w-[945px]"
    />
    <Text1
      fontSize="text-x2-mob"
      fontSizeLg="lg:text-x1"
      className="max-w-[783px] text-center mx-auto px-3 mb-10 lg:px-0 lg:mb-20"
    >
      {description}
    </Text1>
    <ul className="relative text-center w-full mb-14 flex flex-wrap gap-y-7 gap-x-5 justify-center items-center lg:gap-y-14 lg:mb-16">
      {features.map((feature) => (
        <CtoExpertiseListItem key={feature.id} {...feature} />
      ))}
    </ul>
    <div className="flex justify-center">
      <Button
        btnKind="lg"
        title={buttonText}
        icon={<ArrowIcon />}
        iconPosition="right"
        className={cn('w-full justify-center', buttonClassName)}
      />
    </div>
  </PageSection>
);
