import React from 'react';
import cn from 'classnames';
import { CallToActionType } from 'src/types';
import { Button, Heading2, PageSection } from 'src/ui-kit';
import { ArrowIcon } from 'src/assets/icons';

export const CallToActionSection: React.FC<CallToActionType> = ({
  title,
  description,
  buttonText,
  className,
  buttonClassName,
}): JSX.Element => (
  <PageSection>
    <div
      className={cn(
        'flex flex-col justify-center mx-auto text-center max-w-full mb-11 lg:mb-14',
        className
      )}
    >
      <Heading2>{title}</Heading2>
      {description}
    </div>

    <div className="flex justify-center">
      <Button
        btnKind="lg"
        title={buttonText}
        icon={<ArrowIcon />}
        iconPosition="right"
        className={cn(' w-full justify-center', buttonClassName)}
      />
    </div>
  </PageSection>
);
